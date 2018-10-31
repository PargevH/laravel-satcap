<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:website="http://ogp.me/ns/website" lang="en-US" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--INCLUDE SQS SCRIPTS, META TAGS AND USER CONTENT FROM THE CODE INJECTION TAB-->
    <!-- Satoshi Capital -->
    <meta charset="utf-8"/>
    <title>Satoshi Capital</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home1.png') }}"/>
    <meta property="og:site_name" content="Satoshi Capital"/>
    <meta property="og:title" content="Satoshi Capital"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content=""/>
    <meta itemprop="name" content="Satoshi Capital"/>
    <meta itemprop="thumbnailUrl" content=""/>
    <link rel="image_src" href=""/>
    <meta itemprop="image" content=""/>
    <meta name="twitter:title" content="Satoshi Capital"/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:card" content="summary"/>
    <meta name="description" content=""/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css"
          href="//fonts.googleapis.com/css?family=Lato:400,100,300,700,700i,300i,100i"/>
    <script type="text/javascript">
        SQUARESPACE_ROLLUPS = {};
    </script>
    <script>
        (function (rollups, name) {
            if (!rollups[name]) {
                rollups[name] = {};
            }
            rollups[name].js = ["//static.squarespace.com/universal/scripts-compressed/common-6f38909b791e3d2dc2b3-min.en-US.js"];
        })(SQUARESPACE_ROLLUPS, 'squarespace-common');
    </script>
    <script crossorigin="anonymous"
            src="//static.squarespace.com/universal/scripts-compressed/common-6f38909b791e3d2dc2b3-min.en-US.js">
    </script>
    <script data-name="static-context">
        Static = window.Static || {};
        Static.SQUARESPACE_CONTEXT = {
            "facebookAppId": "314192535267336",
            "rollups": {
                "squarespace-announcement-bar": {
                    "css": "//static.squarespace.com/universal/styles-compressed/announcement-bar-d41d8cd98f00b204e9800998ecf8427e-min.css",
                    "js": "//static.squarespace.com/universal/scripts-compressed/announcement-bar-b4451969ef41e3ec7535-min.en-US.js"
                },
                "squarespace-audio-player": {
                    "css": "//static.squarespace.com/universal/styles-compressed/audio-player-e1b486594965430889af24c93ffeb509-min.css",
                    "js": "//static.squarespace.com/universal/scripts-compressed/audio-player-72aa22111765d98cf318-min.en-US.js"
                },
                "squarespace-blog-collection-list": {
                    "css": "//static.squarespace.com/universal/styles-compressed/blog-collection-list-d41d8cd98f00b204e9800998ecf8427e-min.css",
                    "js": "//static.squarespace.com/universal/scripts-compressed/blog-collection-list-6b666466fd942fba7b65-min.en-US.js"
                },
                "squarespace-calendar-block-renderer": {
                    "css": "//static.squarespace.com/universal/styles-compressed/calendar-block-renderer-bba726056d2134131ce9d3077c28adbe-min.css",
                    "js": "//static.squarespace.com/universal/scripts-compressed/calendar-block-renderer-f9acf976fa66e2645824-min.en-US.js"
                },
                "squarespace-chartjs-helpers": {
                    "css": "//static.squarespace.com/universal/styles-compressed/chartjs-helpers-9935a41d63cf08ca108505d288c1712e-min.css",
                    "js": "//static.squarespace.com/universal/scripts-compressed/chartjs-helpers-9517fd147a2ce906df94-min.en-US.js"
                },
                "squarespace-comments": {
                    "css": "//static.squarespace.com/universal/styles-compressed/comments-fd2f389570c2a57065011600abb62cf3-min.css",
                    "js": "//static.squarespace.com/universal/scripts-compressed/comments-de349b89e66f3d8df8e0-min.en-US.js"
                },
                "squarespace-dialog": {
                    "css": "//static.squarespace.com/universal/styles-compressed/dialog-9489ad8eb7daab1644e1eb45a671ba44-min.css",
                    "js": "//static.squarespace.com/universal/scripts-compressed/dialog-16fae14c00f9abec9f8e-min.en-US.js"
                },
                "squarespace-events-collection": {
                    "css": "//static.squarespace.com/universal/styles-compressed/events-collection-bba726056d2134131ce9d3077c28adbe-min.css",
                    "js": "//static.squarespace.com/universal/scripts-compressed/events-collection-746f7805c3dc5060ed21-min.en-US.js"
                },
                "squarespace-form-rendering-utils": {
                    "js": "//static.squarespace.com/universal/scripts-compressed/form-rendering-utils-96bb6d4c119bd618c08f-min.en-US.js"
                },
                "squarespace-forms": {
                    "css": "//static.squarespace.com/universal/styles-compressed/forms-4af1b5b3c288ba939ea861fe2d37119a-min.css",
                    "js": "//static.squarespace.com/universal/scripts-compressed/forms-9e61eff51d675ffc12f1-min.en-US.js"
                },
                "squarespace-gallery-collection-list": {
                    "css": "//static.squarespace.com/universal/styles-compressed/gallery-collection-list-d41d8cd98f00b204e9800998ecf8427e-min.css",
                    "js": "//static.squarespace.com/universal/scripts-compressed/gallery-collection-list-950e914bdea3760ba490-min.en-US.js"
                },
                "squarespace-image-zoom": {
                    "css": "//static.squarespace.com/universal/styles-compressed/image-zoom-ae974921915aeccaff8ad60c60e19c31-min.css",
                    "js": "//static.squarespace.com/universal/scripts-compressed/image-zoom-0e1a80b1053a305904e9-min.en-US.js"
                },
                "squarespace-pinterest": {
                    "css": "//static.squarespace.com/universal/styles-compressed/pinterest-d41d8cd98f00b204e9800998ecf8427e-min.css",
                    "js": "//static.squarespace.com/universal/scripts-compressed/pinterest-3dcb43bac45006ba1b1f-min.en-US.js"
                },
                "squarespace-popup-overlay": {
                    "css": "//static.squarespace.com/universal/styles-compressed/popup-overlay-fdcf92196a4aebc72317a5c5f60f0289-min.css",
                    "js": "//static.squarespace.com/universal/scripts-compressed/popup-overlay-72adfe6a7e5916cc6293-min.en-US.js"
                },
                "squarespace-product-quick-view": {
                    "css": "//static.squarespace.com/universal/styles-compressed/product-quick-view-9abaaa4dfff182aa8d4ccf3b6ffdbe8d-min.css",
                    "js": "//static.squarespace.com/universal/scripts-compressed/product-quick-view-cb00082253ba21e58e06-min.en-US.js"
                },
                "squarespace-products-collection-item-v2": {
                    "css": "//static.squarespace.com/universal/styles-compressed/products-collection-item-v2-ae974921915aeccaff8ad60c60e19c31-min.css",
                    "js": "//static.squarespace.com/universal/scripts-compressed/products-collection-item-v2-ce018128ec0a79caf420-min.en-US.js"
                },
                "squarespace-products-collection-list-v2": {
                    "css": "//static.squarespace.com/universal/styles-compressed/products-collection-list-v2-ae974921915aeccaff8ad60c60e19c31-min.css",
                    "js": "//static.squarespace.com/universal/scripts-compressed/products-collection-list-v2-93bd7606771c33edc9ed-min.en-US.js"
                },
                "squarespace-search-page": {
                    "css": "//static.squarespace.com/universal/styles-compressed/search-page-9c747eeaabe96dacfea4932a63336f54-min.css",
                    "js": "//static.squarespace.com/universal/scripts-compressed/search-page-2bcdfa3b454ff104f2a0-min.en-US.js"
                },
                "squarespace-search-preview": {
                    "js": "//static.squarespace.com/universal/scripts-compressed/search-preview-b456f63a48fa7712f75b-min.en-US.js"
                },
                "squarespace-share-buttons": {
                    "js": "//static.squarespace.com/universal/scripts-compressed/share-buttons-212ecf58a8cb9c33ae30-min.en-US.js"
                },
                "squarespace-simple-liking": {
                    "css": "//static.squarespace.com/universal/styles-compressed/simple-liking-09fa291ec2800c97714f0d157fd0a6ca-min.css",
                    "js": "//static.squarespace.com/universal/scripts-compressed/simple-liking-b43fa35a32d501d4eb10-min.en-US.js"
                },
                "squarespace-social-buttons": {
                    "css": "//static.squarespace.com/universal/styles-compressed/social-buttons-7a696232d1cd101fd62b5f174f9ae6ff-min.css",
                    "js": "//static.squarespace.com/universal/scripts-compressed/social-buttons-d112273ec36d0cfbe91c-min.en-US.js"
                },
                "squarespace-tourdates": {
                    "css": "//static.squarespace.com/universal/styles-compressed/tourdates-d41d8cd98f00b204e9800998ecf8427e-min.css",
                    "js": "//static.squarespace.com/universal/scripts-compressed/tourdates-e76bf46918c34d38d11a-min.en-US.js"
                },
                "squarespace-website-overlays-manager": {
                    "css": "//static.squarespace.com/universal/styles-compressed/website-overlays-manager-d1b0ace5f5af772d643f5a6ce0056946-min.css",
                    "js": "//static.squarespace.com/universal/scripts-compressed/website-overlays-manager-4b2744a94e21ef2f7510-min.en-US.js"
                }
            },
            "pageType": 100,
            "website": {
                "id": "5a02644d6957da5329eaba82",
                "identifier": "satoshicapital",
                "websiteType": 1,
                "contentModifiedOn": 1512778055770,
                "cloneable": false,
                "siteStatus": {},
                "language": "en-US",
                "timeZone": "US/Pacific",
                "machineTimeZoneOffset": -28800000,
                "timeZoneOffset": -28800000,
                "timeZoneAbbr": "PST",
                "siteTitle": "Satoshi Capital",
                "siteDescription": "<p><em>Satoshi Capital</em>&nbsp;is an investment firm focused exclusively on ventures, tokens,&nbsp;and projects related to blockchain tech, digital currency, and crypto assets.</p>",
                "location": {
                    "mapLat": 37.4235897,
                    "mapLng": -122.22100269999999,
                    "addressTitle": "Satoshi Capital",
                    "addressLine1": "",
                    "addressLine2": "",
                    "addressCountry": ""
                },
                "logoImageId": "5a0265acec212d79d8665837",
                "socialLogoImageId": "5a0265d30d92976e4813a14e",
                "shareButtonOptions": {
                    "6": true,
                    "1": true,
                    "4": true,
                    "2": true
                },
                "logoImageUrl": "//static1.squarespace.com/static/5a02644d6957da5329eaba82/t/5a0265acec212d79d8665837/1512778055770/",
                "socialLogoImageUrl": "//static1.squarespace.com/static/5a02644d6957da5329eaba82/t/5a0265d30d92976e4813a14e/1512778055770/",
                "authenticUrl": "https://www.satoshicapital.io",
                "internalUrl": "https://satoshicapital.squarespace.io",
                "baseUrl": "https://www.satoshicapital.io",
                "primaryDomain": "www.satoshicapital.io",
                "sslSetting": 3,
                "isHstsEnabled": true,
                "typekitId": "",
                "statsMigrated": false,
                "imageMetadataProcessingEnabled": true
            },
            "websiteSettings": {
                "id": "5a02644d6957da5329eaba85",
                "websiteId": "5a02644d6957da5329eaba82",
                "type": "Business",
                "subjects": [],
                "country": "US",
                "state": "CA",
                "simpleLikingEnabled": true,
                "mobileInfoBarSettings": {
                    "isContactEmailEnabled": false,
                    "isContactPhoneNumberEnabled": false,
                    "isLocationEnabled": false,
                    "isBusinessHoursEnabled": false
                },
                "commentLikesAllowed": true,
                "commentAnonAllowed": true,
                "commentThreaded": true,
                "commentApprovalRequired": false,
                "commentAvatarsOn": true,
                "commentSortType": 2,
                "commentFlagThreshold": 0,
                "commentFlagsAllowed": true,
                "commentEnableByDefault": true,
                "commentDisableAfterDaysDefault": 0,
                "disqusShortname": "",
                "commentsEnabled": false,
                "contactPhoneNumber": "",
                "businessHours": {
                    "monday": {
                        "text": "",
                        "ranges": [{}]
                    },
                    "tuesday": {
                        "text": "",
                        "ranges": [{}]
                    },
                    "wednesday": {
                        "text": "",
                        "ranges": [{}]
                    },
                    "thursday": {
                        "text": "",
                        "ranges": [{}]
                    },
                    "friday": {
                        "text": "",
                        "ranges": [{}]
                    },
                    "saturday": {
                        "text": "",
                        "ranges": [{}]
                    },
                    "sunday": {
                        "text": "",
                        "ranges": [{}]
                    }
                },
                "storeSettings": {
                    "returnPolicy": null,
                    "termsOfService": null,
                    "privacyPolicy": null,
                    "paymentSettings": {},
                    "expressCheckout": false,
                    "continueShoppingLinkUrl": "/",
                    "useLightCart": false,
                    "showNoteField": false,
                    "shippingCountryDefaultValue": "US",
                    "billToShippingDefaultValue": false,
                    "showShippingPhoneNumber": true,
                    "isShippingPhoneRequired": false,
                    "showBillingPhoneNumber": true,
                    "isBillingPhoneRequired": false,
                    "multipleQuantityAllowedForServices": true,
                    "currenciesSupported": ["CHF", "HKD", "MXN", "EUR", "DKK", "USD", "CAD", "MYR", "NOK", "THB", "AUD", "SGD", "ILS", "PLN", "GBP", "CZK", "SEK", "NZD", "PHP", "RUB"],
                    "defaultCurrency": "USD",
                    "selectedCurrency": "USD",
                    "measurementStandard": 1,
                    "showCustomCheckoutForm": false,
                    "enableMailingListOptInByDefault": false,
                    "contactLocation": {
                        "addressLine1": "",
                        "addressLine2": "",
                        "addressCountry": ""
                    },
                    "businessName": "Satoshi Capital",
                    "sameAsRetailLocation": false,
                    "businessId": "",
                    "isLive": false
                },
                "useEscapeKeyToLogin": false,
                "ssBadgeType": 1,
                "ssBadgePosition": 4,
                "ssBadgeVisibility": 1,
                "ssBadgeDevices": 1,
                "pinterestOverlayOptions": {
                    "mode": "disabled"
                },
                "ampEnabled": true
            },
            "cookieSettings": {
                "isRestrictiveCookiePolicyEnabled": false
            },
            "websiteCloneable": false,
            "subscribed": false,
            "appDomain": "squarespace.com",
            "templateTweakable": true,
            "tweakJSON": {
                "aspect-ratio": "Auto",
                "bg-image": "{background-image:none;background-position:center center;background-size:cover;background-attachment:scroll;background-repeat:no-repeat}",
                "gallery-arrow-style": "No Background",
                "gallery-aspect-ratio": "3:2 Standard",
                "gallery-auto-crop": "true",
                "gallery-autoplay": "false",
                "gallery-design": "Slideshow",
                "gallery-info-overlay": "Show on Hover",
                "gallery-loop": "false",
                "gallery-navigation": "Bullets",
                "gallery-show-arrows": "true",
                "gallery-transitions": "Fade",
                "galleryArrowBackground": "rgba(34,34,34,1)",
                "galleryArrowColor": "rgba(255,255,255,1)",
                "galleryAutoplaySpeed": "3",
                "galleryCircleColor": "rgba(255,255,255,1)",
                "galleryInfoBackground": "rgba(0, 0, 0, .7)",
                "galleryThumbnailSize": "100px",
                "gridSize": "350px",
                "gridSpacing": "20px",
                "product-gallery-auto-crop": "true",
                "product-image-auto-crop": "true"
            },
            "templateId": "507c1fdf84ae362b5e7be44e",
            "pageFeatures": [1, 4],
            "impersonatedSession": false,
            "demoCollections": [{
                "collectionId": "56cb6c3ae707ebc39cec20ab",
                "deleted": true
            }, {
                "collectionId": "56cb715bcf80a1fc05776ae9",
                "deleted": true
            }, {
                "collectionId": "56cb717bcf80a1fc05776cba",
                "deleted": true
            }, {
                "collectionId": "56cb76ed8a65e24ba86eba1d",
                "deleted": true
            }, {
                "collectionId": "56cccc32c2ea5165a6f7a8d2",
                "deleted": true
            }],
            "isFacebookTab": false,
            "tzData": {
                "zones": [
                    [-480, "US", "P%sT", null]
                ],
                "rules": {
                    "US": [
                        [1967, 2006, null, "Oct", "lastSun", "2:00", "0", "S"],
                        [1987, 2006, null, "Apr", "Sun>=1", "2:00", "1:00", "D"],
                        [2007, "max", null, "Mar", "Sun>=8", "2:00", "1:00", "D"],
                        [2007, "max", null, "Nov", "Sun>=1", "2:00", "0", "S"]
                    ]
                }
            },
            "useNewImageLoader": true
        };
    </script>
    <script type="text/javascript">
        SquarespaceFonts.loadViaContext();
        Squarespace.load(window);
    </script>
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "url": "https://www.satoshicapital.io",
      "name": "Satoshi Capital",
      "description": "<p><em>Satoshi Capital</em>&nbsp;is an investment firm focused exclusively on ventures, tokens,&nbsp;and projects related to blockchain tech, digital currency, and crypto assets.</p>",
      "image": "//static1.squarespace.com/static/5a02644d6957da5329eaba82/t/5a0265acec212d79d8665837/1512778055770/"
    }

    </script>
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "legalName": "Satoshi Capital",
      "address": "",
      "email": "",
      "telephone": ""
    }

    </script>
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "LocalBusiness",
      "address": "",
      "image": "https://static1.squarespace.com/static/5a02644d6957da5329eaba82/t/5a0265acec212d79d8665837/1512778055770/",
      "name": "Satoshi Capital",
      "openingHours": ", , , , , , "
    }

    </script>
    <!--[if gte IE 9]>
    <link rel="stylesheet" type="text/css" href="//static1.squarespace.com/static/sitecss/5a02644d6957da5329eaba82/5/507c1fdf84ae362b5e7be44e/5a02644d6957da5329eaba97/2133-05142015/1512344292004/site.css?&filterFeatures=false&part=1"/>
    <link rel="stylesheet" type="text/css" href="//static1.squarespace.com/static/sitecss/5a02644d6957da5329eaba82/5/507c1fdf84ae362b5e7be44e/5a02644d6957da5329eaba97/2133-05142015/1512344292004/site.css?&filterFeatures=false&part=2"/>
    <link rel="stylesheet" type="text/css" href="//static1.squarespace.com/static/sitecss/5a02644d6957da5329eaba82/5/507c1fdf84ae362b5e7be44e/5a02644d6957da5329eaba97/2133-05142015/1512344292004/site.css?&filterFeatures=false&part=3"/>
    <link rel="stylesheet" type="text/css" href="//static1.squarespace.com/static/sitecss/5a02644d6957da5329eaba82/5/507c1fdf84ae362b5e7be44e/5a02644d6957da5329eaba97/2133-05142015/1512344292004/site.css?&filterFeatures=false&part=4"/>
    <![endif]-->
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="//static1.squarespace.com/static/sitecss/5a02644d6957da5329eaba82/5/507c1fdf84ae362b5e7be44e/5a02644d6957da5329eaba97/2133-05142015/1512344292004/site.css?&filterFeatures=false&noMedia=true&part=1"/>
    <link rel="stylesheet" type="text/css" href="//static1.squarespace.com/static/sitecss/5a02644d6957da5329eaba82/5/507c1fdf84ae362b5e7be44e/5a02644d6957da5329eaba97/2133-05142015/1512344292004/site.css?&filterFeatures=false&noMedia=true&part=2"/>
    <link rel="stylesheet" type="text/css" href="//static1.squarespace.com/static/sitecss/5a02644d6957da5329eaba82/5/507c1fdf84ae362b5e7be44e/5a02644d6957da5329eaba97/2133-05142015/1512344292004/site.css?&filterFeatures=false&noMedia=true&part=3"/>
    <link rel="stylesheet" type="text/css" href="//static1.squarespace.com/static/sitecss/5a02644d6957da5329eaba82/5/507c1fdf84ae362b5e7be44e/5a02644d6957da5329eaba97/2133-05142015/1512344292004/site.css?&filterFeatures=false&noMedia=true&part=4"/>
    <![endif]-->
    <!--[if !IE]> -->
    <link rel="stylesheet" type="text/css" href="//static1.squarespace.com/static/sitecss/5a02644d6957da5329eaba82/5/507c1fdf84ae362b5e7be44e/5a02644d6957da5329eaba97/2133-05142015/1512344292004/site.css?&filterFeatures=false"/>
    <!-- <![endif]-->
    <!-- End of Squarespace Headers -->
    <script type="text/javascript"
        src="https://static1.squarespace.com/static/ta/507c1fdb84ae362b5e7be351/2133/scripts/combo/?site.js">
    </script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body id="not-found" class="info-page-layout-poster    hide-info-page-dividers   tagline-and-contact-info-show-tagline-only site-border-none social-icon-style-round  hide-author  show-category-navigation   event-show-past-events event-thumbnails event-thumbnail-size-32-standard event-date-label  event-list-show-cats event-list-date event-list-time event-list-address   event-icalgcal-links  event-excerpts      gallery-design-slideshow aspect-ratio-auto lightbox-style-dark gallery-navigation-bullets gallery-info-overlay-show-on-hover gallery-aspect-ratio-32-standard gallery-arrow-style-no-background gallery-transitions-fade gallery-show-arrows gallery-auto-crop   product-list-titles-under product-list-alignment-left product-item-size-11-square product-image-auto-crop product-gallery-size-11-square product-gallery-auto-crop show-product-price show-product-item-nav product-social-sharing newsletter-style-dark hide-opentable-icons opentable-style-dark small-button-style-solid small-button-shape-square medium-button-style-solid medium-button-shape-square large-button-style-solid large-button-shape-square image-block-poster-text-alignment-center image-block-card-dynamic-font-sizing image-block-card-content-position-center image-block-card-text-alignment-left image-block-overlap-dynamic-font-sizing image-block-overlap-content-position-center image-block-overlap-text-alignment-left image-block-collage-dynamic-font-sizing image-block-collage-content-position-top image-block-collage-text-alignment-left image-block-stack-dynamic-font-sizing image-block-stack-text-alignment-left button-style-solid button-corner-style-square tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-bottom tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-usd not-found-page mobile-style-available">
    <div id="outerWrapper">
            <div id="bgOverlay"></div>
            <!--HEADER-->
            <header id="header">
                <a href="{{route('index')}}">
                    <img src="{{ asset('images/satoshicapitallogo.png') }}" height="60px" style="margin-left:80px; margin-top:10px;">
                </a>
                <!--MAIN NAVIGATION-->

                <!--MOBILE-->

                <nav id="mobile-navigation" data-content-field="navigation-mobileNav">
                    <span id="mobile-navigation-label"></span>
                    <ul>

                        <li class="active-link"><a href="{{route('index')}}">About</a></li>
                        <li class=""><a href="{{route('team')}}">Team</a></li>
                        <li class=""><a href="{{route('portfolio')}}">Portfolio</a></li>
                        <!-- <li class=""><a href="blog.html">Blog</a></li> -->
                        <li class=""><a href="{{route('contactUs')}}">Contact</a></li>
                        @guest
                            <li class=""><a href="{{route('login')}}">Sign In</a></li>
                            <li class=""><a href="{{route('register')}}">Sign Up</a></li>
                        @else
                            <li><a class="l" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ __('LOGOUT') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        @endguest
                    </ul>
                </nav>


                <nav id="main-navigation" style="float:right" data-content-field="navigation-mainNav">
                    <ul>
                        <li class="treeview {{ Request::is('index') ? 'navActive' : '' }}">
                            <a href="{{route('index')}}">
                                <font size="2px">ABOUT</font>
                            </a>
                        </li>
                        |
                        <li class="treeview {{ Request::is('team') ? 'navActive' : '' }}">
                            <a href="{{route('team')}}">
                                <font size="2px">TEAM</font>
                            </a>
                        </li>
                        |
                        <li class="treeview {{ Request::is('portfolio') ? 'navActive' : '' }}">
                            <a href="{{route('portfolio')}}">
                                <font size="2px">PORTFOLIO</font>
                            </a>
                        </li>
                        |
                        <li class="treeview {{ Request::is('contactUs') ? 'navActive' : '' }}">
                            <a href="{{route('contactUs')}}">
                                <font size="2px">CONTACT</font>
                            </a>
                        </li>
                        |
                        @guest
                            <li class="treeview {{ Request::is('login') ? 'navActive' : '' }}">
                                <a href="{{route('login')}}">
                                    <font size="2px">SIGN IN</font>
                                </a>
                            </li>
                            |
                            <li class="treeview {{ Request::is('register') ? 'navActive' : '' }}">
                                <a href="{{route('register')}}">
                                    <font size="2px">SIGN UP</font>
                                </a>
                            </li>
                        @else
                            <li class="treeview {{ Request::is('logout') ? 'navActive' : '' }}">
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('LOGOUT') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </nav>
            </header>
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-warning') }}">{{ Session::get('message') }}</p>
        @endif

        <div class="modalSmall">
            @if(Auth::user() && Auth::user()->email_verified_at == null)
                <div class="container">
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">E - mail verify</h4>
                                </div>
                                <div class="modal-body">
                                    <p class="alert alert-danger">'If your mail address is not verified please check your mail and verified your email address!'</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            @endif

        </div>


        <main class="py-4">
            @yield('content')
        </main>
    <!--FOOTER WITH OPEN BLOCK FIELD-->
        <style>
            footer {
                position: absolute;
                left: 0px;
                bottom: 0px;
                width: 100%;
                color: white;
                margin-bottom: 0px;
                margin-top: 0px;
                text-align: center;
            }
        </style>
        <footer id="footer">
            <div class="sqs-layout sqs-grid-12 columns-12 empty" data-layout-label="Footer Content" data-type="block-field" data-updated-on="1510182355701" id="footerBlocks">
                <div class="row sqs-row">
                    <div class="col sqs-col-12 span-12">
                    </div>
                </div>
            </div>
            <style>
                .u {
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                }

                .l {
                    display: inline;
                    font-size: 11px;
                }
            </style>
            <center>

                <nav data-content-field="navigation-mainNav">
                    <ul class="u">


                        <li class="l"><a href="https://www.linkedin.com/company/satoshicap/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                        |
                        <li class="l"><a href="https://twitter.com/SatoshiCapital" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                        |

                        <li class="l"><a href="https://t.me/satoshicapital" target="_blank"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>

                        |

                        <li class="l">
                            <a href="mailto:team@satoshicapital.io">
                                <font color="white"> team@satoshicapital.io</font>
                            </a>
                        </li>

                    </ul>

                </nav>
            </center>
        </footer>
        <script src="https://s.pageclip.co/v1/pageclip.js" charset="utf-8"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </div>
</body>
</html>

