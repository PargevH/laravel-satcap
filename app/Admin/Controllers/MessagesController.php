<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 29-Oct-18
 * Time: 6:37 PM
 */

namespace App\Admin\Controllers;

//use App\Http\Controllers\Controller;
use App\Messages;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Subscribe;

class MessagesController
{
    use HasResourceActions;
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed   $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed   $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Messages());

        $grid->id('ID')->sortable();
        $grid->from('From');
        $grid->message('Message');
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed   $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Messages::findOrFail($id));

        $show->text('from');
        $show->text('message');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {

        $form = new Form(new Messages());

        $form->display('id', 'ID');
        $form->text('from','from')->rules('required');
        $form->text('message','message')->rules('required');
        return $form;
    }

    public function store(Request $request)
    {
        $emails = Subscribe::pluck('email')->toArray();


        Mail::send('emailAdmin',['sms' => $request->get('message'), 'name'=> $request->get('from') ], function($message) use ($request,$emails)
        {

            foreach ($emails as $email) {
                $message->from('admin@satoshicapital.io', 'SatoshiCapital');

                $message->to($email);
            }
            $message->subject("SatoshiCapital Newsletter");
        });

        return back();
    }

}