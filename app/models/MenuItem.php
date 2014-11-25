<?php

class MenuItem extends \Eloquent {
	protected $fillable = [];
  public function menus()
  {
    return $this->belongsToMany('Menu', 'menu_menu_item');
  }
}