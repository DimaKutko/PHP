<?php

namespace App\Admin\Controllers;

use App\Models\Author;
use App\Models\Post;
use App\Models\Tag;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PostController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Post';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Post());

        $grid->column('id', __('Id'));
        $grid->column('category.name', __('Category'));
        $grid->column('author.name', __('Author'));
        $grid->column('title', __('Title'));
        $grid->column('content', __('Content'));
        $grid->column('is_active', __('Is active'))->switch();
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Post::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category_id', __('Category id'));
        $show->field('author_id', __('Author id'));
        $show->field('title', __('Title'));
        $show->field('content', __('Content'));
        $show->field('is_active', __('Is active'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Post());

        $form->number('category_id', __('Category id'));
        $form->multipleSelect('tags')->options(Tag::all()->pluck('name', 'id'));
        $form->select('author_id', __('Author'))->options(Author::all()->pluck('fullname', 'id'));
        $form->text('title', __('Title'));
        $form->textarea('content', __('Content'));
        $form->switch('is_active', __('Is active'));

        return $form;
    }
}
