<?php 

namespace App\Helpers;

class Setup {

    public static function siteName(){
        return 'DASMA';
    }

    public static function siteDescription(){
        $desc = "
            The purpose of the DASMA website software is to provide an elegant, user-friendly platform for showcasing and selling DASMA’s unique fashion products. It should be designed to:
            • Offer customers an easy and seamless shopping experience.
            • Build brand recognition by reflecting DASMA’s elegance and authenticity.
            and our goal is to:
            • Attract Buyers: Captivate visitors with vibrant visuals and a clean design.
            • Boost Sales: Simplify product browsing and checkout processes to increase conversions.
            • Enhance User Experience: Ensure effortless navigation and accessibility for all age groups.
            • Foster Trust: Showcase customer reviews and transparent communication to build loyalty.
        ";

        $audience = "
            Global Shoppers:
            • Customers from different countries who want a taste of unique African-inspired fashion.
            Age Range:
            • Young Adults (18–35): Style-conscious individuals seeking trendy, standout pieces.
            • Middle-aged Adults (35–55): Customers prioritizing timeless elegance and premium quality.
            Online Shoppers:
            • Tech-savvy users who value convenience and a seamless online shopping experience.
            Gift Buyers:
            • People purchasing outfits for loved ones, especially during festive seasons.
        ";

        $obj = "
            Showcase Unique Designs:
            • Highlight DASMA’s elegant and culturally inspired fashion, including Ankara and lace outfits, through high-quality visuals and detailed product descriptions.
            Increase Sales:
            • Simplify the shopping process with easy navigation, secure payment options, and a seamless checkout experience to encourage purchases.
            Enhance Customer Experience:
            • Provide a user-friendly interface that caters to all age groups, making it simple for customers to browse, select, and buy products effortlessly.
            Build Brand Trust and Loyalty:
            • Share customer testimonials, transparent policies, and DASMA’s story to create a strong emotional connection with customers.
            Expand Global Reach:
            • Make DASMA accessible to international customers with multilingual options, currency converters, and worldwide shipping features.
        ";

        $feature = "
            For Customers

            Homepage

            • What to See:
            • Hero banner showcasing DASMA’s latest designs (e.g., Ankara, lace).
            • Featured products or collections (e.g., “New Arrivals,” “Best Sellers”).
            • Clear navigation bar: Home, Shop, About, Contact, and more.
            • Search bar for easy access to products.

            Shop Page

            • What to Do:
            • Browse product categories (e.g., Ankara, Lace, Accessories).
            • View product details: images, price, description, sizes available, fabric care instructions.
            • Add products to a shopping cart.

            Product Page

            • What to Do:
            • Zoom in on product images for close-up views.
            • Read reviews and ratings from previous buyers.
            • Choose size, quantity, or customization options (if offered).
            • Click “Add to Cart” or “Buy Now” for instant checkout.

            Cart and Checkout

            • What to See/Do:
            • View selected items, edit quantities, or remove products.
            • Apply promo codes or discounts.
            • Choose shipping options and calculate costs.
            • Checkout with secure payment methods (credit/debit cards, mobile payments).

            Customer Account

            • What to Do:
            • Register or log in to save their details.
            • Track orders and view purchase history.
            • Save favorite items to a wishlist.
            • Update personal details like address and payment methods.

            Contact and Support

            • What to Do:
            • Use a contact form or email for inquiries.
            • Access live chat for instant support.
            • View FAQs and shipping/return policies. For You (Admin)

            Dashboard

            • What to Do:
            • Monitor sales, inventory, and website traffic analytics.
            • Add, edit, or remove products and categories.
            • Manage customer orders, returns, and refunds.
            • Upload high-quality images and write engaging product descriptions.

            Order Management

            • What to Do:
            • Process and fulfill orders efficiently.
            • Send order updates to customers automatically (e.g., confirmation, shipping).

            Customer Management

            • What to See/Do:
            • View customer profiles and purchase histories.
            • Offer personalized discounts or promotions to loyal customers.

            Marketing Tools

            • What to Do:
            • Create and manage promotional banners or pop-ups.
            • Set up email campaigns for new collections or sales events.
            • Analyze data to understand buying patterns and preferences Secure Payments:
            • Guarantee safe transactions with SSL encryption.
            Mobile Responsiveness:
            • Ensure the site looks and works perfectly on phones and tablets.
            Multilingual and Multi-currency Support:
            • Appeal to global customers by offering language options and currency converters.
            Social Media Integration:
            • Allow customers to share products on social platforms and stay connected to DASMA. Feedback and Ratings:
            • Enable customers to leave reviews and rate products.
            • Admins can respond to reviews to show engagement.
            Wishlist and Favorites:
            • Customers can save products for later, and you can analyze these trends for popular
        ";
        return 'Dasma is a premium e-commerce website with a focus on luxury and sustainable products.';
    }

    public static function siteKeywords(){
        return 'e-commerce, luxury, sustainable, clothing, shoes, accessories, Nigeria';
    }

    public static function siteLogo(){
        $brand = "Brown, gold, whine, white, and grey";
        return asset('/assets/img/logo.png');
    }

    public static function siteFavicon(){
        return asset('/assets/img/favicon.png');
    }

    /** 
     * @param string sign, word or code
     * @return string | mixed
     */
    public static function currency(string $val = 'sign'){
        $currency =  [
            // Date of introduction	1 January 1973
            'sign' => '₦',
            'word' => 'Naira',
            'code' => 'NGN',
        ];
        if($val && array_key_exists($val,$currency)){
            return $currency[$val];
        }
        return $currency;

    }


    /**
     * Return All Nigeria State
     */
    public static function nigeriaStates(){
        $states=[
            "Abia",
            "Adamawa",
            "Akwa-Ibom",
            "Anambra",
            "Bauchi",
            "Bayelsa",
            "Benue",
            "Borno",
            "Cross-River",
            "Delta",
            "Ebonyi",
            "Edo",
            "Ekiti",
            "Enugu",
            "FCT-Abuja",
            "Gombe",
            "Imo",
            "Jigawa",
            "Kaduna",
            "Kano",
            "Katsina",
            "Kebbi",
            "Kogi",
            "Kwara",
            "Lagos",
            "Nasarawa",
            "Niger",
            "Ogun",
            "Ondo",
            "Osun",
            "Oyo",
            "Plateau",
            "Rivers",
            "Sokoto",
            "Taraba",
            "Yobe",
            "Zamfara"
        ];
        return $states;
    }


}