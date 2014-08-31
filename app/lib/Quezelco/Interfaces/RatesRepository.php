<?php

namespace Quezelco\Interfaces;

interface RatesRepository{
	public function getRates();
	public function update($inputs);
	public function validate($inputs);
}