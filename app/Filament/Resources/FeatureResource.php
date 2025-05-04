<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeatureResource\Pages;
use App\Filament\Resources\FeatureResource\RelationManagers;
use App\Models\Feature;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeatureResource extends Resource
{
    protected static ?string $model = Feature::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Management';

    public static function canCreate(): bool
    {
        return true; // Enable the ability to create new features
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Feature Title')
                    ->required()
                    ->maxLength(255),

                Textarea::make('description')
                    ->label('Feature Description')
                    ->required()
                    ->maxLength(1000),

                FileUpload::make('carousel_images')
                    ->label('Carousel Images')
                    ->image()
                    ->disk('public')
                    ->directory('feature-carousel-images')
                    ->multiple()
                    ->maxFiles(3) // Limit to 3 images
                    ->required(),

                TextInput::make('grade')
                    ->label('Grade')
                    ->required()
                    ->maxLength(255),

                TextInput::make('garansi')
                    ->label('Garansi')
                    ->required()
                    ->maxLength(255),

                TextInput::make('signal')
                    ->label('Signal')
                    ->required()
                    ->maxLength(255),

                TextInput::make('completeness')
                    ->label('Completeness')
                    ->required()
                    ->maxLength(255),

                TextInput::make('sparepart')
                    ->label('Sparepart')
                    ->required()
                    ->maxLength(255),

                TextInput::make('originality')
                    ->label('Originality')
                    ->required()
                    ->maxLength(255),

                Select::make('category')
                    ->label('Category')
                    ->options([
                        'iphone' => 'iPhone',
                        'macbook' => 'MacBook',
                        'iwatch' => 'iWatch',
                        'ipad' => 'iPad',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Title')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('description')
                    ->label('Description')
                    ->limit(50),

                ImageColumn::make('icon')
                    ->label('Icon')
                    ->disk('public')
                    ->getStateUsing(fn ($record) => $record->icon ? 'feature-icons/' . $record->icon : null),
            ])
            ->filters([])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
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
            'index' => Pages\ListFeatures::route('/'),
            'create' => Pages\CreateFeature::route('/create'),
            'edit' => Pages\EditFeature::route('/{record}/edit'),
        ];
    }
}