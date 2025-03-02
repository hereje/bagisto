<?php

namespace Webkul\Product\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'catalog.attribute.create.after'  => [
            'Webkul\Product\Listeners\Attribute@afterCreate',
        ],
        'catalog.attribute.update.after'  => [
            'Webkul\Product\Listeners\Attribute@afterUpdate',
        ],
        'catalog.attribute.delete.before' => [
            'Webkul\Product\Listeners\Attribute@beforeRemove',
        ],
        'catalog.product.create.after'    => [
            'Webkul\Product\Listeners\Product@afterCreate',
        ],
        'catalog.product.update.after'    => [
            'Webkul\Product\Listeners\Product@afterUpdate',
        ],
        'catalog.product.delete.before'   => [
            'Webkul\Product\Listeners\Product@beforeDelete',
        ],
        'checkout.order.save.after'       => [
            'Webkul\Product\Listeners\Order@afterCreate',
        ],
        'sales.order.cancel.after'        => [
            'Webkul\Product\Listeners\Order@afterCancel',
        ],
        'sales.refund.save.after'         => [
            'Webkul\Product\Listeners\Refund@afterCreate',
        ],
    ];
}