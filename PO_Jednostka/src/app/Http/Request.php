<?php 

class Request
{
	/**
	 * [$get description]
	 * @var [type]
	 */
	protected $get;

	/**
	 * [$post description]
	 * @var [type]
	 */
	protected $post;

	/**
	 * [$url description]
	 * @var [type]
	 */
	protected $url;

	/**
	 * [$cookies description]
	 * @var [type]
	 */
	protected $cookies;

	/**
	 * [$files description]
	 * @var [type]
	 */
	protected $files;

	/**
	 * [$server description]
	 * @var [type]
	 */
	protected $server;

	/**
	 * [__construct description]
	 * @param [type] $get     [description]
	 * @param [type] $post    [description]
	 * @param [type] $url     [description]
	 * @param [type] $cookies [description]
	 * @param [type] $files   [description]
	 * @param [type] $server  [description]
	 */
	public function __construct($get, $post, $url, $cookies, $files, $server)
	{
		$this->get = $get;
		$this->post = $post;
		$this->url = $url;
		$this->cookies = $cookies;
		$this->files = $files;
		$this->server = $server;
	}

	/**
	 * [getAll description]
	 * @return [type] [description]
	 */
	public function getAll()
	{
		return $this->get;
	}

	/**
	 * [postAll description]
	 * @return [type] [description]
	 */
	public function postAll()
	{
		return $this->post;
	}

	/**
	 * [urlAll description]
	 * @return [type] [description]
	 */
	public function urlAll()
	{
		return $this->url;
	}

	/**
	 * [cookiesAll description]
	 * @return [type] [description]
	 */
	public function cookiesAll()
	{
		return $this->cookies;
	}

	/**
	 * [filesAll description]
	 * @return [type] [description]
	 */
	public function filesAll()
	{
		return $this->files;
	}

	/**
	 * [serverAll description]
	 * @return [type] [description]
	 */
	public function serverAll()
	{
		return $this->server;
	}

	/**
	 * [returnData description]
	 * @param  [type] $type [description]
	 * @param  [type] $key  [description]
	 * @return [type]       [description]
	 */
	private function returnData($type, $key)
	{
		if(!empty($this->{$type}[$key]))
		{
			return $this->{$type}[$key];
		}

		return FALSE;
	}

	/**
	 * [get description]
	 * @param  [type] $key [description]
	 * @return [type]      [description]
	 */
	public function get($key)
	{
		return $this->returnData("get", $key);
	}

	/**
	 * [post description]
	 * @param  [type] $key [description]
	 * @return [type]      [description]
	 */
	public function post($key)
	{
		return $this->returnData("post", $key);
	}

	/**
	 * [url description]
	 * @param  [type] $key [description]
	 * @return [type]      [description]
	 */
	public function url($key)
	{
		return $this->returnData("url", $key);
	}

	/**
	 * [cookie description]
	 * @param  [type] $key [description]
	 * @return [type]      [description]
	 */
	public function cookie($key)
	{
		return $this->returnData("cookies", $key);
	}

	/**
	 * [file description]
	 * @param  [type] $key [description]
	 * @return [type]      [description]
	 */
	public function file($key)
	{
		return $this->returnData("files", $key);
	}

	/**
	 * [server description]
	 * @param  [type] $key [description]
	 * @return [type]      [description]
	 */
	public function server($key)
	{
		return $this->returnData("server", $key);
	}

	/**
	 * [setUrlParams description]
	 * @param [type] $params [description]
	 */
	public function setUrlParams($params)
	{
		$this->url = $params;
	}
}