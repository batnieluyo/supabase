<?php

namespace Supavel\Supabase\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Supavel\Supabase\Services\DatabaseService $db
 * @method static \Supavel\Supabase\Services\AuthService $auth
 * @method static \Supavel\Supabase\Services\StorageService $storage
 * @method static \Supavel\Supabase\Services\RealtimeService $realtime
 * @method static array info()
 * 
 * @see \Supavel\Supabase\Services\SupabaseService
 */
class Supabase extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'supabase';
    }
}