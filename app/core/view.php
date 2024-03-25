<?php
class View
{
    // $content_view - views that are showing the page content
    // $template_view - common view for all pages
    // $data - array that is filled with page elements. commonly filled in {model}
    public function generate($content_view, $template_view, $data = null)
    {
        // requiring common template for all pages
        // inside it will be some concrete page content
        include 'app/views/' . $template_view;
    }
}
