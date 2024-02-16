<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EdificiosResource\Pages;
use App\Filament\Resources\EdificiosResource\RelationManagers;
use App\Models\Edificios;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EdificiosResource extends Resource
{
    protected static ?string $model = Edificios::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_empresa')->label('Empresa')->relationship('empresa','nombre')->searchable()->preload()->required()->columnSpanFull(),
                Forms\Components\Select::make('id_ciudad')->label('Ciudad')->relationship('ciudad','nombre')->searchable()->preload()->required()->columnSpanFull(),
                Forms\Components\TextInput::make('nombre')->label('Edificio')->required()->columnSpanFull(),
                Forms\Components\TextInput::make('direccion')->label('Direccion')->required()->columnSpanFull(),
                Forms\Components\TextInput::make('coordenadas')->label('Coordenadas')->required()->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('empresa.nombre')->label('Empresa'),
                Tables\Columns\TextColumn::make('ciudad.nombre')->label('Ciudad'),
                Tables\Columns\TextColumn::make('nombre')->label('Edificio'),
                Tables\Columns\TextColumn::make('direccion')->label('Direccion'),
                Tables\Columns\TextColumn::make('coordenadas')->label('Coordenadas'),
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
            'index' => Pages\ListEdificios::route('/'),
            'create' => Pages\CreateEdificios::route('/create'),
            'edit' => Pages\EditEdificios::route('/{record}/edit'),
        ];
    }
}
