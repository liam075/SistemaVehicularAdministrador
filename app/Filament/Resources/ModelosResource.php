<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ModelosResource\Pages;
use App\Filament\Resources\ModelosResource\RelationManagers;
use App\Models\Modelos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Marcas;

class ModelosResource extends Resource
{
    protected static ?string $model = Modelos::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_marcas')->label('Marcas')->relationship('marcas','nombre')->searchable()->preload()->required()->columnSpanFull(),
                Forms\Components\TextInput::make('nombre')->required()->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('marcas.nombre')->label('Marca'),
                Tables\Columns\TextColumn::make('nombre')->label('Modelo'),
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
            'index' => Pages\ListModelos::route('/'),
            'create' => Pages\CreateModelos::route('/create'),
            'edit' => Pages\EditModelos::route('/{record}/edit'),
        ];
    }
}
