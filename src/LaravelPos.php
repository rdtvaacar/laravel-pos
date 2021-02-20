<?php

namespace Rdtvaacar\LaravelPos;

class LaravelPos
{
    public function builder(){
        return new PaymentBuilder();
    }
}
