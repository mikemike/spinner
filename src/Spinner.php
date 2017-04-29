<?php namespace Mikemike\Spinner;
 
class Spinner {
  
    /**
     * Spinner::process()
     * 
     * @param string $text
     * @return string
     */    
    public function process($text)
    {
        return preg_replace_callback(
            '/\{(((?>[^\{\}]+)|(?R))*)\}/x',
            array($this, 'replace'),
            $text
        );
    }

    /**
     * Spinner::replace()
     *
     * @param string $text 
     * @return string 
     */
    public function replace($text)
    {
        $text = $this->process($text[1]);
        $parts = explode('|', $text);
        return $parts[array_rand($parts)];
    }
}