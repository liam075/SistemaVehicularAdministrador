<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ActivosResource\Pages;
use App\Filament\Resources\ActivosResource\RelationManagers;
use App\Models\Activos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RegistrosResource\Pages\CreateRegistros;
use App\Filament\Resources\RegistrosResource\Pages\EditRegistros;
use Filament\Tables\Columns\ImageColumn;
class ActivosResource extends Resource
{
    protected static ?string $model = Activos::class;

    protected static ?string $navigationIcon = 'heroicon-o-check-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('vehiculos.matricula')->label('Matricula')->searchable(),
                Tables\Columns\TextColumn::make('vehiculos.color')->label('Color')->searchable(),
                Tables\Columns\TextColumn::make('vehiculos.año')->label('Año')->searchable(),
                // Tables\Columns\TextColumn::make('edificios.nombre')->label('Donde se Dirige'),
                Tables\Columns\TextColumn::make('status')->label('Status'),
                ImageColumn::make('vehiculos.foto')->label('Imagen')->searchable(),
                // Tables\Columns\TextColumn::make('tipo_registro')->label('Tipo de Registro')->searchable(),
                // Tables\Columns\TextColumn::make('descripcion')->label('Descripcion')->searchable(),
                // Tables\Columns\TextColumn::make('cantidad')->label('Cantidad de Objetos o Personas')->numeric()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListActivos::route('/'),
            'create' => CreateRegistros::route('/create'),
            'edit' => EditRegistros::route('/{record}/edit'),
        ];
    }
}
