{* DO NOT EDIT THIS FILE! Use an override template instead. *}
{default attribute_base=ContentObjectAttribute}
{let matrix=$attribute.content}

{* Matrix. *}
{section show=$matrix.rows.sequential}
<table class="list" cellspacing="0">

<tr>
    <th class="tight">&nbsp;</th>
    {section var=ColumnNames loop=$matrix.columns.sequential}<th>{$ColumnNames.item.name}</th>{/section}
</tr>

{section var=Rows loop=$matrix.rows.sequential sequence=array( bglight, bgdark )}
<tr class="{$Rows.sequence}">

{* Remove. *}
<td><input type="checkbox" name="{$attribute_base}_data_matrix_remove_{$attribute.id}[]" value="{$Rows.index}" title="{'Select row for removal.'|i18n( 'design/standard/content/datatype' )}" /></td>

{* Custom columns. *}
{section var=Columns loop=$Rows.item.columns}
<td><input class="box" type="text" name="{$attribute_base}_ezmatrix_cell_{$attribute.id}[]" value="{$Columns.item|wash( xhtml )}" /></td>
{/section}

</tr>
{/section}
</table>
{section-else}
<p>{'There are no rows in the matrix.'|i18n( 'design/content/datatype/edit' )}</p>
{/section}


{* Buttons. *}
{section show=$matrix.rows.sequential}
<input class="button" type="submit" name="CustomActionButton[{$attribute.id}_remove_selected]" value="{'Remove selected'|i18n( 'design/standard/content/datatype' )}" title="{'Remove selected rows from the matrix.'|i18n( 'design/standard/content/datatype' )}" />
{section-else}
<input class="button-disabled" type="submit" name="CustomActionButton[{$attribute.id}_remove_selected]" value="{'Remove selected'|i18n( 'design/standard/content/datatype' )}" disabled="disabled" />
{/section}
&nbsp;&nbsp;
{let row_count=sub( 40, count( $matrix.rows.sequential ) ) index_var=0}
{section show=$row_count|lt( 1 )}
        {set row_count=0}
{/section}

<select class="matrix_cell" name="{$attribute_base}_data_matrix_add_count_{$attribute.id}" title="{'Number of rows to add.'|i18n( 'design/standard/content/datatype' )}" >
    {section loop=$row_count}
        {set index_var=$index_var|inc}
        {delimiter modulo=5}
           <option value="{$index_var}">{$index_var}</option>
        {/delimiter}
   {/section}
</select>

<input class="button" type="submit" name="CustomActionButton[{$attribute.id}_new_row]" value="{'Add rows'|i18n('design/standard/content/datatype')}" title="{'Add new rows to the matrix.'|i18n( 'design/standard/content/datatype' )}" />
{/let}


{/let}
{/default}
