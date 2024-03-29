<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\{
    BooleanGroup,
    KeyValue,
    Select,
    Text
};

class Attribute extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \Brightly\Mango\Models\Variable::class;

    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static $group = 'Adminisztráció';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name',
    ];

    public static function label()
    {
        return 'Változók';
    }

    public static function singularLabel()
    {
        return 'Változó';
    }

    /**
     * The icon of the resource.
     * 
     * @var string
     */
    public static function icon() 
    {
        return view('nova::icon.svg-options', [
            'height'    => 20,
            'width'     => 20,
            'color'     => 'var(--sidebar-icon)',
            'class'     => 'sidebar-icon'
        ])->render();
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        $model = $this;

        $fields = [
            TextWithSlug::make('Név', 'name')
                ->slug('slug')
                ->rules('required', 'max:255'),
            Slug::make('', 'slug')
                ->slugifyOptions([
                    'lang'  => 'hu'
                ])
                ->hideFromIndex()
                ->hideFromDetail(),
            Text::make('Szabályok', 'rules')
                ->help('A szabályokat a keretrendszer <a href="https://laravel.com/docs/6.x/validation#available-validation-rules" target="_blank">beviteli szabályai</a> szerint kell megadni.'),
            Select::make('Típus', 'type')
                ->options(config('mango-vars.fields')),
            BooleanGroup::make('Értelmezési tartomány', 'variable_type')
                ->options(config('mango-vars.scopes')),
            KeyValue::make('parameters')
                ->rules('json'),
            // Heading::make('Érték')
            //     ->hideWhenCreating(),
            // Text::make('Érték')
            //     ->hideWhenCreating()
        ];

        return $fields;
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }

    /**
     * Build a "relatable" query for the given resource.
     *
     * This query determines which instances of the model may be attached to other resources.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function relatableQuery(NovaRequest $request, $query)
    {
        /** Get the resource dependent variables. The default value is the StdClass
         * @var string
         */
        $resource = 'stdClass';

        /** If the request is related to *something* we try to get the type of
         * the given resource.
         */
        if ($request->get('viaResource'))
        {
            /** Name of the class to the variable's value should be related.
             * @var string
             */
            $resource_class = '\\App\\Nova\\'.\Str::ucfirst(\Str::singular($request->get('viaResource')));
            $resource = $resource_class::$model;
        }
        
        /** Querying only for the scope's variables. */
        $query->whereJsonContains('variable_type', ["\\{$resource}" => true]);

        return parent::relatableQuery($request, $query);
    }
}
