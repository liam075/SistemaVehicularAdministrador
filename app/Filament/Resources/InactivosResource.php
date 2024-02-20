<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InactivosResource\Pages;
use App\Filament\Resources\InactivosResource\RelationManagers;
use App\Models\Inactivos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RegistrosResource\Pages\CreateRegistros;
use App\Filament\Resources\RegistrosResource\Pages\EditRegistros;

class InactivosResource extends Resource
{
    protected static ?string $model = Inactivos::class;

    protected static ?string $navigationIcon = 'heroicon-o-x-circle';

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
                Tables\Columns\TextColumn::make('vehiculos.matricula')->label('Vehiculo')->searchable(),
                Tables\Columns\TextColumn::make('edificios.nombre')->label('Donde se Dirige'),
                Tables\Columns\TextColumn::make('status')->label('Status'),
                Tables\Columns\TextColumn::make('tipo_registro')->label('Tipo de Registro')->searchable(),
                Tables\Columns\TextColumn::make('descripcion')->label('Descripcion')->searchable(),
                Tables\Columns\TextColumn::make('cantidad')->label('Cantidad de Objetos o Personas')->numeric()->searchable(),
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
            'index' => Pages\ListInactivos::route('/'),
            'create' => CreateRegistros::route('/create'),
            'edit' => EditRegistros::route('/{record}/edit'),
        ];
    }
}
