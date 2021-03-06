`19 Jun 2012`

 * Add pagerfanta pager + doc
 * Add a blank column
 * Allow massaction without selected rows
 * Fix bug - Reset templates array when you call a grid

`18 Jun 2012`

 * Fix bug - Don't show filters row with only massaction and actions column.

`17 Jun 2012`

 * Fix bug - Filterable attribute from a source annotation doesn't work
 * Don't show a mapped field column if it has not been defined with a column annotation
 * Fix #144
 * Move the checkbox of massaction from the filters row to the titles row
 * Add the reset filters feature (#36)
 * Add a reset button in the massaction column of the filters row
 * Add a reset link in the actions column of the filters row
 * Add a reset button in the grid search box
 * Update screenshots
 * [BC Break] Pass the grid object to the cell and filter blocks instead of the hash of the grid
 * Add number of total results

`16 Jun 2012`

 * [Bundle] Push the actuel master branch into the new 1.0 branch. The master branch is now the version 2.0 of this bundle.

**New in 2.0:** See [UPGRADE-2.0](UPGRADE-2.0.md) documentation.

 * [BC Break][Bundle] Change the namespace of the bundle
 * [BC Break][Filters] Add operator selector feature with a default operator
 * [Filters] Add operators Equals, Not equal to, Lower than, Lower than or equal to, Greater than, Greater than or equal to, Between exclusive, Between inclusive, Contains, Not contains, Starts with, Ends with, Is not defined, Is defined,
 * [Filters] Add annotation and php support for the operator selector feature and for the default operator
 * [BC Break][Columns] Remove range, select and sourceselect columns (Include now in all columns with the filter attribute)
 * [Annotations][Filters] Add an attribute to define the type of the filter (input, select)
 * [Select filter] Populate select filters from the query result or the source
 * [Annotations][Select filter] Add an attribute to define the source values of the select filter (From values, the source or the query)
 * [Annotations][Filters] Add range feature implemented in input and select filter type with the operators between.
 * [BC Break][Grid::initFilter] Grid::initFilter rename to setDefaultFilters
 * [BC Break][Grid::initOrder] Grid::initOrder rename to setDefaultOrder
 * [Columns] Add a way to change the data junction of the filters of a column
 * [Mass action] Add templates for massaction filter and cell
 * [Mass action] Add additional parameters passed to the callback
 * [Columns] Add number column (decimal, money, percent, duration, scientific, spell out)
 * [Export] Add export feature
 * [Export] Add DSV, CSV, SCSV, TSV, XML, Excel (with PHPExcel library) and html (with PHPExcel library) exports.
 * [Grid::setLimits] Add support for a simple array to define limits (e.g. $grid->setLimits(5, 10);)
 * [BC Break][Sources] Source::setCallBack rename to manipulateRow and manipulateQuery and the first argument is removed
 * [BC Break][Columns] Column::setCallBack rename to manipulateRenderCell
 * [Row action] Add addRouteParameters method on rowAction class
 * [Row action] rowAction::setRouteParameters allows string
 * [BC Break][Grid::gridResponse] Grid::gridResponse rename to Grid::getGridResponse
 * [BC Break][Grid::gridManagerResponse] GridManager::gridManagerResponse rename to GridManager::getGridManagerResponse
 * [Grid::getGridResponse] The view parameters and the view name in Grid::getGridResponse can be set in reverse order to match the Template::render function.
 * [Grid::getGridResponse] Add array('grid' => $grid) automatically in view parameters with Grid::getGridResponse
 * [Grid::getGridManagerResponse] GridManager::getGridManagerResponse can be set in reverse order to match the Template::render function.
 * [Grid::getGridManagerResponse] Add array('grid1' => $grid1, 'grid2' => $grid2, ...) automatically in view parameters with GridManager::getGridManagerResponse
 * [DQL Functions] Manage a simple parameter for dql aggregate functions (e.g. vars.var:CountIf:3)
 * [Entity source] Implement setMaxResults feature
 * [Document source] Implement setMaxResults feature
 * [Document source] Add all filters with operators
 * [Document source] Add populate select filters feature
 * [Vector source] Implement setMaxResults feature
 * [Vector source] Add guess typing
 * [Vector source] Add all filters with operators
 * [Vector source] Add guess type sorting
 * [Vector source] Add populate select filters feature
 * [Grid::setData] Implement setMaxResults feature
 * [Grid::setData] Add all filters with operators
 * [Grid::setData] Add guess type sorting
 * [Grid::setData] Add populate select filters feature
 * [Template] Add some css classes
 * [Template] Show 'false' in the grid if value === false in boolean column because a false value isn't show in twig)
 * [Template] Add width attribute on filter th tag too.
 * [ActionsColumn] Add the method Grid::setActionsColumnSize to set the size of the actions column
 * [ActionsColumn] Add the method Grid::setActionsColumnSeparator to set the separator of the actions column
 * [Filter] Disallow url filtering if the column is not filterable
 * [Sort] Disallow url sorting if the column is not sortable
 * [Limit] Disallow url limit if the value is not in the limits selector
 * [Bundle] Update composer
 * [Bundle] Clean and optimize code
 * [Bundle] Follow Code Standard of Symfony2
 * [Docs] Rework the whole documentation with the new features.

`25 May 2012`

 * XMLHttpRequest force the persistence mode

`15 May 2012`

 * Allow using controllers as services in mass actions (lstrojny)
 * Optimize total count query on entity source

`13 May 2012`

 * Add DateTimeRange and DateRange column
 * Add DateTime and Date column
 * Add parentType search for cell render

`8 May 2012`

 * Nothing private!

`7 May 2012`

 * Fix bug - Templates are not reset for each grid displayed
 * Fix bug - Count of selected visible rows when filters are displayed
 * Fix bug - params not initialised to an empty array in twig extension
 * Fix bug - Pager not visible when only one limit is defined
 * Fix bug - Set false to the filterable attribute of an ActionColumn
 * Add a way to pass attributes to RowActions
 * Add odd/even css class in tr tags

`5 May 2012`

 * Allow extended Grid class

`3 May 2012`

 * Add groupBy support on Source annotation

`2 May 2012`

 * Don't throw no data message when the grid is filtered
 * If noDataMessage = false, the grid is display empty with the noResultMessage
 * Add a no result message when a filtered grid has no result
 * Add last-column and last-row classes because the css :last-child isn't support by IE7
 * Fix input page setter (Doesn't work when you have a form before the grid)
 * Set to the first page if this is an order, limit, mass action or filter request

`1 May 2012`

 * [BC Break] Show a message instead of an empty grid
 * Add a way to pass twig variables to override blocks

`30 Apr 2012`

 * Add array Column for Entity sources
 * Fix createHash when you define a id for the grid
 * [BC BREAK] Don't use previous data if the client leave the page during the session. You can turn on the persistence if you want the opposite.
 * Fix initFilters method
 * Add initOrder method
 * Add show and hide columns methods
 * Fix render bloc ids and manipulate row field ids with mapping fields.

`29 Apr 2012`

 * Add Vector source
 * Add visible columns mask Helpers
 * Add support for additionnal route parameters on row actions

`23 Apr 2012`

 * Add groups support in annotation + doc

`21 Apr 2012`

 * Improve configuration doc
 * Set the default title of an associated field
 * Add support for multi columns on the same JoinColumn property + doc
 * Add groupBy feature with aggregate dql functions support in mapping association + doc

`20 Apr 2012`

 * add initFilters feature
 * fix custom actions column
 * fix exception not found with setData on the grid

`13 Apr 2012`

 * japanese translations

`12 Apr 2012`

 * applying filter now reloads grid to first page
 * new SourceSelect column type

`9 Apr 2012`

 * fix broken confirmation message
 * polish translations

`8 Apr 2012`

 * as far as symfony 2.0 lacks of some important features and 2.1dev is heavily unstable with too many changes every day (which causes too many problems form my company) i've decided to stop using symfony2 for my future projects it basically means that i'll no longer support this bundle, Abhoryo and nurikabe have rights to merge any PR for this bundle

`20 Oct 2011`

 * new param for column called `role` * column is visible only when access is granted by security.context
 * removed column->hide() and column->show() and added column->isVisible() and column->setVisible(bool)

`19 Oct 2011`

 * when rendering template calling `prepare` function is not needed
 * removed custom route for filtering and ordering grid columns
 * added events to modify source data query building and data hydration
 * added column->setAlign('left/right/center')
 * support relations in Entity source
 * support custom mapping divers
 * form type guesser from Source column
 * own columns can be added by annotations
 * possible registrations of custom column types in container * look at Resources/Config/services
 * grid need to be created as service
 * annotations
 * ODM support