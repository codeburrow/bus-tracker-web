<?php namespace CodeBurrow\Transformers;

/**
 * Abstract Class. Transforms collection array.
 *
 */
class ApiCoordinatesTransformer extends Transformer
{

	/**
	 * @param $item
	 *
	 * @return mixed
	 */
	public function transform($item)
	{
		if ($item["routeID"] == 1 || $item["routeID"] == 3 || $item["routeID"] == 5) {
			$prefix = "From ";
		} else {
			$prefix = "To ";
		}

		return [
			"ID"      => $item["ID"],
			"routeID" => $item["routeID"],
			"theDate" => $item["theDate"],
			"theTime" => $item["theTime"],
			"lat"     => $item["lat"],
			"lng"     => $item["lng"],
			"prefix"  => $prefix,
		];
	}
}