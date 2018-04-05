<?php

namespace Blueprint\Acf\Field;
use Blueprint\Acf as acf;

class DateTimePicker extends acf\Field {

  function init() {
    $this->setType('date_time_picker');
    $this->setFormats();
  }

  protected function setFormats() {
    $this->setDisplayFormat();
    $this->setReturnFormat();
  }

  function setDisplayFormat($format=null) {
    if (!$format) {$format = $format = 'F j, Y g:i a';}
    $this->field['display_format'] = $format;
    return $this;
  }

  function setReturnFormat($format=null) {
    if (!$format) {$format = 'Y-m-d H:i';}
    $this->field['return_format'] = $format;
    return $this;
  }

}
