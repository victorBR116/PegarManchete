<?php
class Manchete {

    private $url;
    private $classe;
    
    public function __construct($url, $classe) {
      $this->url = $url;
      $this->classe = $classe;
    }
    
    public function pegarManchetes() {
      $html = file_get_contents($this->url);
    
      $dom = new DOMDocument;
      @$dom->loadHTML($html);
    
      $xpath = new DOMXPath($dom);
      $manchetes = $xpath->query("//a[contains(@class, '$this->classe')]");
    
      foreach ($manchetes as $manchete) {
          echo $manchete->nodeValue. "." . PHP_EOL;
      }
    }
  }
  