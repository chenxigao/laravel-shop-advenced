<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\CrowdfundingProduct;
use App\Models\Product;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class CrowdfundingProductsController extends CommonProductsController
{
//    use HasResourceActions;

    public function getProductType()
    {
        return Product::TYPE_CROWDFUNDING;
   }


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function customGrid(Grid $grid)
    {

        //只展示 type 为众筹类型的商品
        $grid->id('ID')->sortable();
        $grid->title('商品名称');
        $grid->on_sale('已上架')->display(function ($value){
            return $value ? '是' : '否';
        });
        $grid->price('价格');

        //展示众筹相关字段
        $grid->column('crowdfunding.target_amount', '目标金额');
        $grid->column('crowdfunding.end_at','结束时间');
        $grid->column('crowdfunding.total_amount', '目前金额');
        $grid->column('crowdfunding.status','状态')->display(function ($value){
            return CrowdfundingProduct::$statusMap[$value];
        });

    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function customForm(Form $form)
    {

        //添加众筹相关字段
        $form->text('crowdfunding.target_amount', '众筹目标金额')->rules('required|numeric|min:0.01');
        $form->datetime('crowdfunding.end_at', '众筹结束时间')->rules('required|date');
//        $form->hasMany('skus', '商品 SKU', function (Form\NestedForm $form){
//            $form->text('title', 'SKU 名称')->rules('required');
//            $form->text('description', 'SKU 描述')->rules('required');
//            $form->text('price', '单价')->rules('required|numeric|min:0.01');
//            $form->text('stock', '剩余库存')->rules('required|integer|min:0');
//        });


    }
}
