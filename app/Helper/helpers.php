<?php

function secondPage( $data  ){

    return request()->route()->named($data);

}
