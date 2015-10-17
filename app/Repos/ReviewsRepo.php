<?php namespace App\Repos;

use App\Review;

class ReviewsRepo {
	
	/**
	 * @return all content
	 */
	public function getAll(){

		return (isAdmin()) ? Review::orderBy('status','asc')->paginate(20) : Review::orderBy('id','desc')->where('status',1)->paginate(20);
	}

	/**
	 * @return created object result
	 */
	public function save($data){

		return Review::create($data);
	}

	/**
	 * @return delete object result
	 */
	public function delete($id){

		return Review::destroy($id);
	}

	/**
	 * @return approved object result
	 */
	public function approve($id){

		$review = Review::find($id);

		$review->status = 1;

		return $review->save();
	}


}