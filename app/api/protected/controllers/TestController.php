<?php

class TestController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{

	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
	 echo "adsfasdfasdf";
	}
        public function actionCreate()
	{
	 echo "this is create";
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{

	}



}