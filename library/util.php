<?php class Util {
    
    public static function getWidget($widget_id) {
        if (function_exists('dynamic_sidebar')) {
            ob_start();
            dynamic_sidebar($widget_id);
            $widget = ob_get_contents();
            ob_end_clean();
            return $widget;
        }
    }
    //transforma o widget com textos em um array
    public static function getWidgetObj($widget_id) {
        $html = self::getWidget($widget_id);
        $widgets = array();
        $widgets['items'] = array();
        if ($html) {
            $dom = new DOMDocument;
            $dom->loadHTML('<?xml encoding="utf-8" ?>'.$html);
            foreach ($dom->getElementsByTagName('h1') as $node) {
                $widgets['items'][] = array('title'=>$node->nodeValue);
            }
            foreach ($dom->getElementsByTagName('p') as $key => $node) {
                if (!isset($widgets['items'][$key])) {
                    $widgets['items'][] = array('content'=>$node->nodeValue);
                } else {
                    $widgets['items'][$key]['content'] = $node->nodeValue;
                }
            }
        }
        return $widgets;
    }
    //transforma o widget com imagens em um array
    public static function getWidgetArrayImg($widget_id) {
        $html = self::getWidget($widget_id);
        $widgets = array();
        $widgets['items'] = array();
        if ($html) {
            $dom = new DOMDocument;
            $dom->loadHTML('<?xml encoding="utf-8" ?>'.$html);
            
            foreach ($dom->getElementsByTagName('div') as $node) {
                $tags = $node->getElementsByTagName('img');

                foreach ($tags as $tag) {     
                    $widget['img'] = $tag->getAttribute('src');
                }

                $widget['title'] = $node->nodeValue;
                $widgets['items'][] = $widget;
            }
            
        }
        return $widgets;
    }
    public static function getWidgetImgPath($widget_id) {
        $html = self::getWidget($widget_id);
        $widgets = array();
        $widgets['items'] = array();
        if ($html) {
            $dom = new DOMDocument;
            $dom->loadHTML('<?xml encoding="utf-8" ?>'.$html);
            $tags = $dom->getElementsByTagName('img');
            
            foreach ($tags as $tag) {     
                $widgets = $tag->getAttribute('src');
            }
        }
        return $widgets;
    }
    public static function getFirstWidgetObj($widget_id) {
        $widgets = self::getWidgetObj($widget_id);
        return array_shift($widgets['items']);
    }
    
    //gera a thumbnail preview do youtube
    public static function previewYtb($videoUrl) {
        $parts = parse_url($videoUrl);

        $videoID="";
        if( isset($parts['query']) ){
            parse_str($parts['query'], $queries);
            if(isset($queries['v'])){
                $videoID=$queries['v'];
            }
        }else{
            if($parts['host']=="youtu.be"){
                if(isset($parts['path']) && $parts['path']!=""){
                    $videoID=$parts['path'];
                }
            }
        }

        if($videoID!=""){
            $videoID = str_replace("/", "", $videoID);
        }
        $youtube = array(
            'imageURL' => "https://img.youtube.com/vi/".$videoID."/maxresdefault.jpg",
            'videoID'  =>  $videoID
        );
        return $youtube;
    }
}