<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client; 
use Symfony\Component\DomCrawler\Crawler;
class ScraperController extends Controller
{
    private $results = array();

    public function scraper(){

        $client = new Client(['verify' => false ]);
        
      
        
        $url = "https://suplementaz.com";

        // Wordpress, Magento, Prestashop o Shopify
        $wordpressContador = 0;
        $magentoContador = 0;
        $prestashopContador = 0;
        $shopifyContador = 0;

        // Prueba 1: página administrador
        // Contiene: wp-admin        
        try {
            $urlWPADMIN = $url . '/wp-admin';
            $page = $client->request('GET', $urlWPADMIN);
            $crawler = new Crawler();
            $crawler->addHtmlContent($page->html(), 'UTF-8');

            if ($crawler->filter('html:contains("wp-admin")')->count() > 0) {
                echo "Prueba 1 - Login: Es un Wordpress <br>"; 
                $wordpressContador++;
            } elseif($crawler->filter('html:contains("magento")')->count() > 0){
                echo "Prueba 1 - Login: Es un Magento <br>";
                $magentoContador++;
            }
            else {
                echo "Prueba 1 - Login: No es un Wordpress <br>"; 
            }
        } catch (\Exception $e) {
            echo "Error al acceder a la URL: " . $e->getMessage() .  "<br>";
        }
        
        // Prueba 2: ver si tiene datos de configuración WP en el código fuente
        // Contiene: wp-content, wp-settings, wp-includes o wp-widget        
        try {
            $page2 = $client->request('GET', $url);
            $crawler2 = new Crawler();
            $crawler2->addHtmlContent($page2->html(), 'UTF-8');

            if ($crawler2->filter('html:contains("wp-content")')->count() > 0 || $crawler2->filter('html:contains("wp-settings")')->count() > 0 || $crawler2->filter('html:contains("wp-widget")')->count() > 0 || $crawler2->filter('html:contains("wp-includes")')->count() > 0) {
                echo "Prueba 2 - Configuración: Es un Wordpress <br>"; 
                $wordpressContador++;
            } else {
                echo "Prueba 2 - Configuración: No es un Wordpress <br>"; 
            }
        } catch (\Exception $e) {
            echo "Error al acceder a la URL: " . $e->getMessage() .  "<br>";
        }

        
        // Prueba 3: ver si usa Woocommerce
        // Contiene: woocommerce
        try {
            $page3 = $client->request('GET', $url);
            $crawler3 = new Crawler();
            $crawler3->addHtmlContent($page3->html(), 'UTF-8');

            if ($crawler3->filter('html:contains("woocommerce")')->count() > 0) {
                echo "Prueba 3 - Woocommerce: Es un Wordpress <br>"; 
                $wordpressContador++;
            } else {
                echo "Prueba 3 - Woocommerce: No es un Wordpress <br>"; 
            }
        } catch (\Exception $e) {
            echo "Error al acceder a la URL: " . $e->getMessage() .  "<br>";
        }

        
        // Prueba 4: ver si usa Elementor, Divi o otro builder
        // Contiene: elementor, divi o gutenberg
        try {
            $page4 = $client->request('GET', $url);
            $crawler4 = new Crawler();
            $crawler4->addHtmlContent($page4->html(), 'UTF-8');

            if ($crawler4->filter('html:contains("elementor")')->count() > 0 || $crawler4->filter('html:contains("divi")')->count() > 0 || $crawler4->filter('html:contains("guten")')->count() > 0) {
                echo "Prueba 4 - Builder: Es un Wordpress <br>"; 
                $wordpressContador++;
            } else {
                echo "Prueba 4 - Builder: No es un Wordpress <br>"; 
            }
        } catch (\Exception $e) {
            echo "Error al acceder a la URL: " . $e->getMessage() .  "<br>";
        }


       
        // Prueba 5: estilos de wordpress     
        // Contiene: wp--preset
        try {
            $page5 = $client->request('GET', $url);
            $crawler5 = new Crawler();
            $crawler5->addHtmlContent($page5->html(), 'UTF-8');

            if ($crawler5->filter('html:contains("wp--preset")')->count() > 0 ) {
                echo "Prueba 5 - Estilo: Es un Wordpress <br>"; 
                $wordpressContador++;
            } else {
                echo "Prueba 5 - Estilo: No es un Wordpress <br>"; 
            }
        } catch (\Exception $e) {
            echo "Error al acceder a la URL: " . $e->getMessage() .  "<br>";
        }

        // Prueba 6: license.txt        
        // Contiene: existe la pag license.txt
        try {
            $urlLicense = $url . '/license.txt';

            $page6 = $client->request('GET', $urlLicense);
            $crawler6 = new Crawler();
            $crawler6->addHtmlContent($page6->html(), 'UTF-8');

            if ($crawler6->filter('html:contains("WordPress")')->count() > 0) {
                echo "Prueba 6 - License: Es un Wordpress <br>"; 
                $wordpressContador++;
            } else {
                echo "Prueba 6 - License: No es un Wordpress <br>"; 
            }
        } catch (\Exception $e) {
            echo "Error al acceder a la URL: " . $e->getMessage() . "<br>";
        }
        

        // Prueba 7: readme.html        
        // Contiene: existe la pag readme.html
        try {
            $urlReadme = $url . "/readme.html";
            $page7 = $client->request('GET', $urlReadme);
            $crawler7 = new Crawler();
            $crawler7->addHtmlContent($page7->html(), 'UTF-8');

            if ($crawler7->filter('html:contains("wp-admin")')->count() > 0 ) {
                echo "Prueba 7 - Readme: Es un Wordpress <br>"; 
                $wordpressContador++;
            } else {
                echo "Prueba 7 - Readme: No es un Wordpress <br>"; 
            }
        } catch (\Exception $e) {
            echo "Error al acceder a la URL: " . $e->getMessage() .  "<br>";
        }

        // Prueba 8: magento_version
        // Existe la pag: url/magento_version
        try{
            $urlMagentoVersion = $url . "/magento_version";
            $page8 = $client->request("GET", $urlMagentoVersion);
            $crawler8 = new Crawler();
            $crawler8->addHtmlContent($page8->html(),'UTF-8');    

            if($crawler8->filter('html:contains("Magento")')->count() > 0){
                echo "Prueba 8 - Magento Version: Es un Magento <br>";
                $magentoContador++;
            } else {
                echo "Prueba 8 - Magento Version: No es un Magento <br>";
            }
        } catch(\Exception $e) {
            echo "Error al acceder a la URL: ". $e->getMessage() . "<br>";
        }

        // Prueba 9: Magento Login
        // Existe la pag: url/giftcard/customer
        try{
            $urlMagentoLogin = $url . "/giftcard/customer";
            $page9 = $client->request("GET", $urlMagentoLogin);
            $crawler9 = new Crawler();
            $crawler9->addHtmlContent($page9->html(),'UTF-8');    

            if($crawler9->filter('html:contains("login")')->count() > 0){
                echo "Prueba 9 - Magento Login: Es un Magento <br>";
                $magentoContador++;
            } else {
                echo "Prueba 9 - Magento Login: No es un Magento <br>";
            }
        } catch(\Exception $e) {
            echo "Error al acceder a la URL: ". $e->getMessage() . "<br>";
        }

        // Prueba 10: Info Magento
        // Existe la pag: magento
        try{
            $page10 = $client->request("GET", $url);
            $crawler10 = new Crawler();
            $crawler10->addHtmlContent($page10->html(),'UTF-8');    

            if($crawler10->filter('html:contains("magento")')->count() > 0){
                echo "Prueba 10 - Magento Info: Es un Magento <br>";
                $magentoContador++;
            } else {
                echo "Prueba 10 - Magento Info: No es un Magento <br>";
            }
        } catch(\Exception $e) {
            echo "Error al acceder a la URL: ". $e->getMessage() . "<br>";
        }

        // Prueba 11: Archivos Configuración Magento
        // Existe la pag: magento_theme, magento_ui, magento_pagebuilder son algunos de los archivos de configuración
        try{
            $page11 = $client->request("GET", $url);
            $crawler11 = new Crawler();
            $crawler11->addHtmlContent($page11->html(),'UTF-8');    

            if($crawler11->filter('html:contains("magento_theme")') || $crawler11->filter('html:contains("magento_ui")') || $crawler11->filter('html:contains("magento_pagebuilder")')){
                echo "Prueba 11 - Magento Configuración: Es un Magento <br>";
                $magentoContador++;
            } else {
                echo "Prueba 11 - Magento Configuración: No es un Magento <br>";
            }
        } catch(\Exception $e) {
            echo "Error al acceder a la URL: ". $e->getMessage() . "<br>";
        }

        // Prueba 12: Prestashop
        // Existe en la pag: prestashop
        try{
            $page12 = $client->request("GET", $url);
            $crawler12 = new Crawler();
            $crawler12->addHtmlContent($page12->html(),'UTF-8');    

            if($crawler12->filter('html:contains("prestashop")')->count() > 0){
                echo "Prueba 12 - Prestashop Inicial: Es un Prestashop <br>";
                $prestashopContador++;
            } else {
                echo "Prueba 12 - Prestashop Inicial: No es un Prestashop <br>";
            }
        } catch(\Exception $e) {
            echo "Error al acceder a la URL: ". $e->getMessage() . "<br>";
        }

        // Prueba 13: Shopify
        // Existe en la pag: shopify
        try{
            $page13 = $client->request("GET", $url);
            $crawler13 = new Crawler();
            $crawler13->addHtmlContent($page13->html(),'UTF-8');    

            if($crawler13->filter('html:contains("shopify")')->count() > 0){
                echo "Prueba 13 - Shopify Inicial: Es un Shopify <br>";
                $shopifyContador++;
            } else {
                echo "Prueba 13 - Shopify Inicial: No es un Shopify <br>";
            }
        } catch(\Exception $e) {
            echo "Error al acceder a la URL: ". $e->getMessage() . "<br>";
        }

        // Prueba 14: Shopify
        // Existe en la pag: Myshopify
        try{
            $page14 = $client->request("GET", $url);
            $crawler14 = new Crawler();
            $crawler14->addHtmlContent($page14->html(),'UTF-8');    

            if($crawler14->filter('html:contains("myshopify")')->count() > 0){
                echo "Prueba 14 - Shopify Myshopify: Es un Shopify <br>";
                $shopifyContador++;
            } else {
                echo "Prueba 14 - Shopify Myshopify: No es un Shopify <br>";
            }
        } catch(\Exception $e) {
            echo "Error al acceder a la URL: ". $e->getMessage() . "<br>";
        }

        // 14 pruebas en total
        // 7 pruebas de Wordpress, 4 de Magento, 1 de Prestashop 2 de Shopify

        $platform = "";

        if ($shopifyContador >= 2) {
            $platform = "Shopify";
        } elseif ($wordpressContador >= 4) {
            $platform = "WordPress";
        } elseif ($prestashopContador == 1) {
            $platform = "Prestashop";
        } elseif ($magentoContador >= 2) {
            $platform = "Magento";
        } 
        return $platform;
    }


    public function pasaResultado()
    {
        try {
            $platform = $this->scraper();
            
            // Ahora solamente se retorna el resultado obtenido de la función scraper()
            return view('resultado', ['platform' => $platform]);
        } catch (\Exception $e) {
            return view('error', ['message' => $e->getMessage()]);
        }

    }
}
