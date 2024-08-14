<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\RendezVous;
use Filament\Tables\Table;
use Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RendezVousResource\Pages;
use App\Filament\Resources\RendezVousResource\RelationManagers;

class RendezVousResource extends Resource
{
    protected static ?string $model = RendezVous::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Rendez-vous';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
    
                    Forms\Components\TextInput::make('Name')
                        ->required()
                        ->label('Nom'),
                    Forms\Components\TextInput::make('LastName')
                        ->required()
                        ->label('Prénom'),
                    Forms\Components\TextInput::make('Telephone')
                        ->required()
                        ->label('Téléphone'),
                    Forms\Components\TextInput::make('Adresse')
                        ->required()
                        ->label('Adresse'),
                    Forms\Components\TextInput::make('Email')
                        ->required()
                        ->email()
                        ->label('Email'),
                    Forms\Components\Select::make('status')
                        ->required()
                        ->options([
                            'en cours' => 'En cours',
                            'terminé' => 'Terminé',
                        ])
                        ->label('État'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Name'),
                TextColumn::make('Adresse'),
                TextColumn::make('Heure'),
                TextColumn::make('Date'),
                TextColumn::make('Telephone'),
                TextColumn::make('Email'),
                TextColumn::make('Superficie'),
                TextColumn::make('Energie'),
                TextColumn::make('Quantite'),
                TextColumn::make('AvisImpots'),
                TextColumn::make('FactureGazElec'),
                SelectColumn::make('status')->options(['en cours' => 'En cours',
                                                        'terminé' => 'Terminé',]),
           

            ])
            ->filters([
                SelectFilter::make('status')
                ->options([
                    'en cours' => 'En cours',
                    'terminé' => 'Terminé',
                ]),
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
            'index' => Pages\ListRendezVouses::route('/'),
            'create' => Pages\CreateRendezVous::route('/create'),
            'edit' => Pages\EditRendezVous::route('/{record}/edit'),
        ];
    }
}
