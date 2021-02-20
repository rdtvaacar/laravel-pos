<?php


namespace Rdtvaacar\LaravelPos\Tests\Fixtures;


use Illuminate\Database\Eloquent\Model;
use Rdtvaacar\LaravelPos\Billable;

class User extends Model
{
    use Billable;

    protected $guarded = [];
}
