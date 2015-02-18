<?php 

namespace Core\Form;

use Core;
use Core\Form\Fields;

/**
* Classe formulaire
*/
class Form extends Core\Object
{
	public $fields = array();
	private $errors = array();

	public function __construct($entity)
	{
        $this->fields = array();
        $this->errors= array();
        $this->setData($entity);
	}

    private function setData($entity =  null){
        if($entity){
            $reflect = new \ReflectionClass($entity);
            $props   = $reflect->getProperties(\ReflectionProperty::IS_PUBLIC | \ReflectionProperty::IS_PROTECTED| \ReflectionProperty::IS_PRIVATE);
            foreach ($props as $prop) {
                $name = $prop->getName();
                $field = ucfirst($name);
                $str = "get".$field;
                $this->fields[$name]['data'] = $entity->$str();
            }

        }
        else{
        }

    }

    /*
     * Fonction permettants d'ajouter un �lement dans un formulaire
     */
    public function add($name,$type,$rules = array()){
        // dans le cas d'un create, les donnée de l'entity n'exsite pas le set data n'a rien fait il faut donc mettre une valeur vide
        if(!isset($this->fields[$name]['data']))  $this->fields[$name]['data'] = "";
        if($type == "textarea")
            $this->$type($name,$rules,array());
        else
            $this->$type($name,$rules);
        $this->fields[$name] = array('name'=>$name, 'type' => $type, 'object' => $this->$name);
    }

    public function get($name){
        if(!isset($this->fields[$name])) return false;
        else return $this->fields[$name];
    }


    private function text($name,$rules){
        $this->input($name,'text',$rules);
    }
    private function email($name,$rules){
        $this->input($name,'email',$rules);
    }

	private function input($name,$type, $rules = array())
	{
		$this->$name = new Fields\InputField($name,$this->fields[$name]['data'],$rules,$type);
	}

	private function checkbox($name,$type, $rules = array())
	{
		$this->$name = new Fields\CheckboxField($name,$this->fields[$name]['data'],$rules,$type);
	}

    private function textarea($name, $rules = array(), $options)
	{
		$this->$name = new Fields\TextareaField($name,$this->fields[$name]['data'],$rules);
	}

	public function start($action, $method ='post')
	{
		return "<form action='$action' method='$method'>";
	}

	public function end()
	{
		return "</form>";
	}

    public function check($data){
        $validator = new Validator($data);
        foreach($this->fields as $field){
            if(array_key_exists('object',$field)){
                foreach ($field['object']->rules as $rule) {
                    if(!$validator->check($field['object']->getName(),$rule)){
                        $this->errors[$field['object']->getName()] = "Le champ ".$field['object']->getName()." n'a pas été bien rempli.";
                    }
                }
            }
        }
        return $this->errors;
    }

    public function getErrors(){
        return $this->errors;
    }
}
