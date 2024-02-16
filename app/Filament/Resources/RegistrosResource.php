<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegistrosResource\Pages;
use App\Filament\Resources\RegistrosResource\RelationManagers;
use App\Models\Registros;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RegistrosResource extends Resource
{
    protected static ?string $model = Registros::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_vehiculo')->label('Vehiculo')->relationship('vehiculos','matricula')->searchable()->preload()->required()->columnSpanFull(),
                Forms\Components\Select::make('id_edificio')->label('Edificio donde se Dirige')->relationship('edificios','nombre')->searchable()->preload()->required()->columnSpanFull(),
                Forms\Components\Select::make('status')->label('Status')->options(['Activo' => 'Activo','No Activo'=>'No Activo'])->searchable()->preload()->required()->columnSpanFull(),
                Forms\Components\Select::make('tipo_registro')->label('Tipo de Registro')->options(['Llevar Personas'=> 'Llevar Personas','Llevar Carga'=>'Llevar Carga'])->searchable()->preload()->required()->columnSpanFull(),
                Forms\Components\TextInput::make('descripcion')->label('Descripcion')->columnSpanFull(),
                Forms\Components\TextInput::make('cantidad')->label('Cantidad de Objetos o Personas')->numeric()->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('vehiculos.matricula')->label('Vehiculo')->searchable(),
                Tables\Columns\TextColumn::make('edificios.nombre')->label('Donde se Dirige'),
                Tables\Columns\TextColumn::make('status')->label('Status')->searchable(),
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
            'index' => Pages\ListRegistros::route('/'),
            'create' => Pages\CreateRegistros::route('/create'),
            'edit' => Pages\EditRegistros::route('/{record}/edit'),
        ];
    }
}
