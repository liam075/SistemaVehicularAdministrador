<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MantenimientoResource\Pages;
use App\Filament\Resources\MantenimientoResource\RelationManagers;
use App\Models\Mantenimiento;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DatePicker;

class MantenimientoResource extends Resource
{
    protected static ?string $model = Mantenimiento::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_vehiculo')->label('Vehiculo')->relationship('vehiculos','matricula')->searchable()->preload()->required()->columnSpanFull(),
                Forms\Components\Select::make('id_taller')->label('Taller')->relationship('taller','nombre')->searchable()->preload()->required()->columnSpanFull(),
                Forms\Components\Select::make('tipo_registro')->label('Tipo de registro')->options(['Planificado' => 'Planificado','Averia'=>'Averia'])->searchable()->preload()->required()->columnSpanFull(),
                DatePicker::make('fecha')->label('Fecha  de ingreso')->columnSpanFull(),
                Forms\Components\TextInput::make('kms')->label('Kms del Vehiculo')->columnSpanFull(),
                Forms\Components\Select::make('vehiculo_disponible')->label('Vehiculo Disponible')->options(['Si' => 'Si','No'=>'No'])->searchable()->preload()->required()->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('vehiculos.matricula')->label('Vehiculo')->searchable(),
                Tables\Columns\TextColumn::make('taller.nombre')->label('Taller')->searchable(),
                Tables\Columns\TextColumn::make('tipo_registro')->label('Tipo de registro')->searchable(),
                Tables\Columns\TextColumn::make('fecha')->label('Fecha  de ingreso')->searchable(),
                Tables\Columns\TextColumn::make('kms')->label('Kms del Vehiculo')->searchable(),
                Tables\Columns\TextColumn::make('vehiculo_disponible')->label('Vehiculo Disponible')->searchable(),
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
            'index' => Pages\ListMantenimientos::route('/'),
            'create' => Pages\CreateMantenimiento::route('/create'),
            'edit' => Pages\EditMantenimiento::route('/{record}/edit'),
        ];
    }
}
