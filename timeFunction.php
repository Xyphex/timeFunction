<?php
/**
 * Simple function used for benchmarking that times an anonymous function. It
 * returns a float representing the elapsed time accurate to the nearest
 * microsecond.
 *
 * Copyright © 2015 Aram Nap
 *
 * This program is free software: you can redistribute it and/or modify it under
 * the terms of the GNU Lesser General Public License as published by the
 * Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser General Public License
 * for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
function timeFunction($function, $iterations = 1)
{
	$start = microtime(true);

	for ($i = 0; $i < $iterations; ++$i) {
		$function();
	}

	return microtime(true) - $start;
}
