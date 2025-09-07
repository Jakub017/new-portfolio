<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Project;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProjectResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProjectResource\RelationManagers;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Zarządzanie projektami';

    protected static ?string $navigationLabel = 'Projekty';

    protected static ?string $modelLabel = 'Projekt';

    protected static ?string $pluralModelLabel = 'Projekty';

    protected static ?string $slug = 'projekty';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->label('Zdjęcie')
                    ->image()
                    ->disk('public')
                    ->directory('projects')
                    ->visibility('public')
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->label('Nazwa')
                    ->required()
                    ->afterStateUpdated(function($state, callable $set) {
                        $set('slug', Str::slug($state));
                    })
                    ->columnSpanFull()
                    ->maxLength(255),
                Forms\Components\Textarea::make('excerpt')
                    ->label('Zajawka')
                    ->columnSpanFull()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->label('Opis')
                    ->columnSpanFull(),
                Forms\Components\Select::make('Technologie')
                    ->label('Technologie')
                    ->multiple()
                    ->preload()
                    ->relationship('techs', 'name'),
                Forms\Components\TextInput::make('link')
                    ->label('Link')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->label('Slug')
                    ->columnSpanFull()
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
