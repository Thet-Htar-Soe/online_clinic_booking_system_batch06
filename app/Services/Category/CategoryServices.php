<?php

namespace App\Services\Category;

use App\Contracts\Dao\Category\CategoryDaoInterface;
use App\Contracts\Services\Category\CategoryServiceInterface;
use Illuminate\Http\Request;

/**
 * Service class for category
 */
class CategoryServices implements CategoryServiceInterface
{
    /**
     * category dao
     */
    private $categoryDao;

    /**
     * Class Constructor
     * @param categoryDaoInterface
     */
    public function __construct(CategoryDaoInterface $categoryDao)
    {
        $this->categoryDao = $categoryDao;
    }
}
