<?php

class Menu extends \Eloquent {
	protected $fillable = [];
  public function menuItems()
  {
    return $this->belongsToMany('MenuItem', 'menu_menu_item', 'menu_id', 'menu_item_id');
  }
}