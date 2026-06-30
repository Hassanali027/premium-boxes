<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllCategoryController extends Controller
{
    /**
     * Show Box by Industry page (allcategory listing)
     */
    public function boxByIndustry()
    {
        $data = [
            'categoryType'   => 'industry',
            'pageTitle'      => 'Box By Industry | Premium Custom Boxes',
            'heroTitle'      => 'Rigid Boxes for Every',
            'heroHighlight'  => 'Industry',
            'heroDesc'       => 'Tailor-made packaging solutions designed to reflect the unique demands of your industry. From opulent jewellery boxes and luxury retail packaging to sleek tech solutions, we combine premium craftsmanship, functionality, and attention to detail to elevate your brand and create a memorable unboxing experience.',
            'browseSectionTitle' => 'Browse by Industry',
            'browseSectionDesc'  => 'Click on any industry to explore rigid box designs tailored to its unique packaging needs and brand requirements.',
            'breadcrumbLabel'    => 'Box By Industry',
        ];

        return view('allcategory', $data);
    }

    /**
     * Show Box by Style page (allcategory listing)
     */
    public function boxByStyle()
    {
        $data = [
            'categoryType'   => 'style',
            'pageTitle'      => 'Box By Style | Premium Custom Boxes',
            'heroTitle'      => 'Rigid Boxes by',
            'heroHighlight'  => 'Style',
            'heroDesc'       => 'Discover our wide range of box styles — from classic lid & base to magnetic closure, drawer boxes, and more. Every style is crafted to perfection, ensuring your product is presented with elegance and protection.',
            'browseSectionTitle' => 'Browse by Style',
            'browseSectionDesc'  => 'Click on any style to explore rigid box designs tailored to your specific packaging and presentation needs.',
            'breadcrumbLabel'    => 'Box By Style',
        ];

        return view('allcategory', $data);
    }

    /**
     * Show Box by Material page (allcategory listing)
     */
    public function boxByMaterial()
    {
        $data = [
            'categoryType'   => 'material',
            'pageTitle'      => 'Box By Material | Premium Custom Boxes',
            'heroTitle'      => 'Rigid Boxes by',
            'heroHighlight'  => 'Material',
            'heroDesc'       => 'Choose the perfect material for your packaging — from eco-friendly kraft and premium rigid board to corrugated, paperboard, and more. Quality materials that protect your product and represent your brand.',
            'browseSectionTitle' => 'Browse by Material',
            'browseSectionDesc'  => 'Select a material type to explore our custom box options crafted for durability, sustainability, and visual appeal.',
            'breadcrumbLabel'    => 'Box By Material',
        ];

        return view('allcategory', $data);
    }

    /**
     * Show Promotional Boxes page (allcategory listing)
     */
    public function promotional()
    {
        $data = [
            'categoryType'   => 'promotional',
            'pageTitle'      => 'Promotional Boxes | Premium Custom Boxes',
            'heroTitle'      => 'Custom',
            'heroHighlight'  => 'Promotional Boxes',
            'heroDesc'       => 'Make every campaign count with our custom promotional packaging. Designed to boost brand visibility, drive customer engagement, and create a lasting impression — perfect for product launches, events, gifts, and seasonal campaigns.',
            'browseSectionTitle' => 'Browse Promotional Boxes',
            'browseSectionDesc'  => 'Explore our promotional packaging options designed to amplify your marketing efforts and make your brand stand out.',
            'breadcrumbLabel'    => 'Promotional Boxes',
        ];

        return view('allcategory', $data);
    }

    /**
     * Show individual Category Page (catagorypage.blade.php)
     * Route: /category/{type}/{slug}
     */
    public function categoryPage($type, $slug)
    {
        // Convert slug to readable name: cosmetics-beauty → Cosmetics & Beauty
        $name = ucwords(str_replace('-', ' ', $slug));
        // Fix "And" → "&"
        $name = preg_replace('/\bAnd\b/', '&', $name);

        // Map type to parent breadcrumb route
        $parentRoutes = [
            'industry' => 'box-by-industry',
            'material' => 'box-by-material',
            'style'    => 'box-by-style',
        ];

        $data = [
            'categoryType'   => $type,
            'categoryName'   => $name,
            'categorySlug'   => $slug,
            'pageTitle'      => $name . ' Boxes | Premium Custom Boxes',
            'breadcrumbLabel'=> $name,
            'parentRoute'    => $parentRoutes[$type] ?? 'home',
            'parentLabel'    => ucfirst($type) . ' Categories',
        ];

        return view('catagorypage', $data);
    }
}
