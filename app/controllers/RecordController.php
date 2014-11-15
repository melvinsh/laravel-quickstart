<?php

class RecordController extends BaseController {

	/**
	 * Show us the records that a user has.
	 */
	public function showRecords() {
		$records = Auth::user()->records()->get();

		return View::make('pages.records.index')->with('records', $records);
	}

	/**
	 * Add a record for the current user.
	 */
	public function addRecord() {
		$rules = array(
			'artist' => 'required',
			'title' => 'required',
			'year' => 'numeric',
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to(route('get_records'))
			->withErrors($validator)
			->withInput(Input::all());
		}

		$record = Record::create(array(
			'artist' => Input::get('artist'),
			'title' => Input::get('title'),
			'year' => Input::get('year'),
			'user_id' => Auth::user()->id
		));

		$record->save();

		return Redirect::to(route('get_records'))->with('message', 'Done!');
	}

}
