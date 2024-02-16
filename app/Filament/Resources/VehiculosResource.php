<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VehiculosResource\Pages;
use App\Filament\Resources\VehiculosResource\RelationManagers;
use App\Models\Vehiculos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use App\Models\Marcas;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\ImageColumn;

class VehiculosResource extends Resource
{
    protected static ?string $model = Vehiculos::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_empresa')->label('Empresa que pertenece el Vehiculo')->relationship('empresas','nombre')->searchable()->preload()->required()->columnSpanFull(),
                Forms\Components\Select::make('id_modelos')->label('Modelos del Vehiculo')->relationship('modelos','nombre')->searchable()->preload()->required()->columnSpanFull(),
                Forms\Components\Select::make('id_edificio')->label('Edificio donde se encuentra el vehiculo')->relationship('edificios','nombre')->searchable()->preload()->required()->columnSpanFull(),
                Forms\Components\TextInput::make('matricula')->label('Matricula del Vehiculo')->columnSpanFull(),
                Forms\Components\TextInput::make('color')->label('Color del Vehiculo')->columnSpanFull(),
                Forms\Components\DatePicker::make('año')->label('Año del Vehiculo')->format('Y')->columnSpanFull(),
                FileUpload::make('foto')->label('Imagen del Vehiculo')->columnSpanFull()

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('empresas.nombre')->label('Empresa')->searchable(),
                Tables\Columns\TextColumn::make('modelos.nombre')->label('Modelo del Vehiculo')->searchable(),
                Tables\Columns\TextColumn::make('edificios.nombre')->label('Edificio que le pertenece el Vehiculo')->searchable(),
                Tables\Columns\TextColumn::make('matricula')->label('Matricula')->searchable(),
                Tables\Columns\TextColumn::make('color')->label('Color')->searchable(),
                Tables\Columns\TextColumn::make('año')->label('Año'),
                ImageColumn::make('foto')->label('Imagen'),
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
            'index' => Pages\ListVehiculos::route('/'),
            'create' => Pages\CreateVehiculos::route('/create'),
            'edit' => Pages\EditVehiculos::route('/{record}/edit'),
        ];
    }
}
