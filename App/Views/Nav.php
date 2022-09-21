<?php
namespace App\Views;

class Nav {
    protected array $links=[];

    public function __construct(array $links)
    {
        $this->links=$links;
    }

    public function linksToli():string{
        $html="";
        foreach($this->links as $link)
        $html.="<li><a href=\"".$link["href"]."\" class=\"".$link["class"]."\">".$link["ttl"]."</a></li>";
        return $html;
    }
    public function buildNav():string{
       return "<nav class=\"main-nav\"><ul class=\"main-nav-list\">".$this->linksToli()."</ul></nav>" ;
    }

}
?>