<?php

namespace App\Helpers;

class SubCategoryHelper
{
    public function getSubCategory()
    {
        return array_merge(
            $this->setSubCatergory()
        );
    }
    private function setSubCatergory()
    {
        return array(
            [
                'name' =>'water',
                'category_id' => 1
            ],
            [
                'name' =>'water',
                'category_id' => 1
            ],
        );
    }
}