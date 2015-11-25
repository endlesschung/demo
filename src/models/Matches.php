<?php
class Matches extends BaseModel {

    static $cacheLevel = self::CACHE_LEVEL_FIRST;
    public static $resourceName = 'Matches';
    protected $table = 'jc_matchs';

    /**
     * the columns for list page
     * @var array
     */
    public static $columnForList = [];
    protected $fillable = [];

    /**
     * order by config
     * @var array
     */
    public $orderColumns = [
        'b_date' => 'desc',
        'num'   => 'desc'
    ];

    /**
     * the main param for index page
     * @var string
     */
    public static $mainParamColumn = 'num';

    /**
     * 下拉列表框字段配置
     * @var array
     */
    public static $htmlSelectColumns = [];

    /**
     * The rules to be applied to the data.
     *
     * @var array
     */
    public static $rules = [
//             'num'                => 'required|between:1,10',
//             'date'                => 'required|numeric',
//             'time'          => 'numeric',
//             'b_date'      => 'in:0,1',
//             'status' => 'in:0,1',
//             'hot'          => 'required',
//             'buy_len'             => 'required',
//             'code_len'            => 'required',
//             'identifier'          => 'required|between:3,10',
//             'days'                => 'numeric',
//             'issue_over_midnight' => 'in:0,1',
//             'issue_format'        => 'required',
//             'begin_time'          => 'required',
//             'end_time'            => 'required',
//             'need_draw'           => 'in:0,1',
//             'sequence'            => 'numeric',
    ];

    /**
     * The array of custom error messages.
     *
     * @var array
     */
    public static $customMessages = [];

    /**
     * title field
     * @var string
     */
    public static $titleColumn = 'match_id';






}
