<?php

namespace Core;

class Form{
    /**
     * @var array
     */
    private $inputs  = [];
    /**
     * @var string
     */
    private $method  = "POST";
    /**
     * @var string
     */
    private $style   = '';
    /**
     * @var string
     */
    private $target  = "#";
    /**
     * @var string
     */
    private $submit  = "Envoyer";
    /**
     * @var int
     */
    private static $idInput = 0;
    /**
     * @param string $method
     * @param string $target
     */
    public function __construct($method = "POST", $target = "#"){
        $this->method = $method;
        $this->target = $target;
    }
    /**
     * Build form
     */
    public function createForm(){ ?>
        <form action="<?= $this->target; ?>" method="<?= $this->method; ?>" style="<?= $this->style; ?>">
            <?php foreach($this->inputs as $input){ $style = $this->buildStyle($input['style']); ?>
                    <label for="<?= 'input' . self::$idInput; ?>"><?= $input['label'] ?></label>
                    <input type='<?= $input['type'] ?>' name="<?= $input['name'] ?>" id="<?=  'input'.self::$idInput;   self::$idInput++; ?>" style="<?= $style ?>"/> </br>
            <?php } ?>

            <button type="submit"><?= $this->submit; ?></button>
        </form>
    <?php
    }
    /**
     * Edit method of the form
     *
     * @param $method
     */
    public function method($method){
        $this->method = $method;
    }
    /**
     * Edit target of the form
     *
     * @param $target
     */
    public function target($target){
        $this->target = $target;
    }
    /**
     * Draw form
     */
    public function draw(){
        $this->createForm();
    }
    /**
     * @param $type
     * @param $name
     * @param $label
     * @param string $style
     */
    public function input($type, $name, $label, $style = null){
        $this->inputs[] = [
            'type' => $type,
            'name' => $name,
            'label' => $label,
            'style' => $style
        ];
    }
    /**
     * Add CSS rule to the form
     *
     * @param $property
     * @param $value
     */
    public function addFormStyle($property, $value){
        $style = "$property: $value;";
        if(empty($this->style)){
            $this->style = $style;
        }else{
            $this->style .= $style;
        }
    }
    /**
     * Build style if an array is passed
     *
     * @param $style_set
     * @return string|void
     */
    private function buildStyle($style_set){
        if(is_array($style_set)){
            $final_style = '';
            foreach($style_set as $style){
                $final_style .= "{$style[0]}: {$style[1]};";
            }
            return $final_style;
        }
        return;
    }
}