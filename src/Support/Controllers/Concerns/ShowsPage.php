<?php
namespace Web\Support\Controllers\Concerns;
use Delgont\Cms\Models\Page\Page;

trait ShowsPage
{
    protected $pageView = 'index';

    public function index($page_key)
    {
        $page = Page::where('page_key', $page_key)->firstOrFail();
        return (request()->expectsJson()) ? response()->json($page) : view($this->getPageView(), compact(['page']));
    }

    protected function getPageView()
    {
        return $this->pageView;
    }

    protected function setPageView($view)
    {
        $this->pageView = $view;
    }

}