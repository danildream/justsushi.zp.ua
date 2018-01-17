<?php

global $sgrb;
$sgrb->includeController('Controller');
$sgrb->includeModel('Review');
$sgrb->includeModel('Comment');
$sgrb->includeModel('Category');
$sgrb->includeModel('Template');
$sgrb->includeModel('Comment_Rating');
$sgrb->includeModel('Rate_Log');

class SGRB_SetupController extends SGRB_Controller
{
	public static function activate()
	{
		SGRB_ReviewModel::create();
		SGRB_CommentModel::create();
		SGRB_TemplateModel::create();
		SGRB_CategoryModel::create();
		SGRB_Comment_RatingModel::create();
		SGRB_Rate_LogModel::create();
		if (is_multisite()) {
			$sites = wp_get_sites();
			foreach($sites as $site) {
				SGRB_ReviewModel::create();
				SGRB_CommentModel::create();
				SGRB_TemplateModel::create();
				SGRB_CategoryModel::create();
				SGRB_Comment_RatingModel::create();
				SGRB_Rate_LogModel::create();
			}
		}

	}

	public static function deactivate()
	{
		
	}

	public static function uninstall()
	{
		SGRB_ReviewModel::drop();
		SGRB_CommentModel::drop();
		SGRB_TemplateModel::drop();
		SGRB_CategoryModel::drop();
		SGRB_Comment_RatingModel::drop();
		SGRB_Rate_LogModel::drop();
		if (is_multisite()) {
			$sites = wp_get_sites();
			foreach($sites as $site) {
				SGRB_ReviewModel::drop();
				SGRB_CommentModel::drop();
				SGRB_TemplateModel::drop();
				SGRB_CategoryModel::drop();
				SGRB_Comment_RatingModel::drop();
				SGRB_Rate_LogModel::drop();

			}
		}
	}

	public static function createBlog()
	{

	}

}
