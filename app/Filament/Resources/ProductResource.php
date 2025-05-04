<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\NumberInput;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Products';
    protected static ?string $navigationGroup = 'Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Product Name')
                    ->required()
                    ->maxLength(255),

                Textarea::make('description')
                    ->label('Product Description')
                    ->required()
                    ->maxLength(1000),

                TextInput::make('price')
                    ->label('Price')
                    ->numeric()
                    ->required(),

                FileUpload::make('image')
                    ->label('Product Image')
                    ->image()
                    ->disk('public')
                    ->directory('product-images')
                    ->nullable()
                    ->acceptedFileTypes(['image/jpeg', 'image/png'])
                    ->maxSize(5120), // Maksimal 5MB

                FileUpload::make('additional_image')
                    ->label('Additional Product Images')
                    ->image()
                    ->disk('public')
                    ->directory('product-images')
                    ->multiple()
                    ->maxFiles(5) // Maximum 5 additional images
                    ->acceptedFileTypes(['image/jpeg', 'image/png'])
                    ->maxSize(5120), // Maximum 5MB per image

                FileUpload::make('featured_image')
                    ->label('Featured Image')
                    ->image()
                    ->disk('public')
                    ->directory('product-images')
                    ->nullable()
                    ->acceptedFileTypes(['image/jpeg', 'image/png'])
                    ->maxSize(5120), // Maximum 5MB

                TextInput::make('sku')
                    ->label('Product SKU')
                    ->required()
                    ->maxLength(100)
                    ->unique(ignoreRecord: true),

                Select::make('status')
                    ->label('Status')
                    ->options([
                        'available' => 'Available',
                        'out_of_stock' => 'Out of Stock',
                        'discontinued' => 'Discontinued',
                    ])
                    ->default('available'),

                Select::make('category_id')
                    ->label('Category')
                    ->options([
                        'iphone' => 'iPhone',
                        'macbook' => 'MacBook',
                        'iwatch' => 'iWatch',
                        'ipad' => 'iPad',
                    ])
                    ->required(),

                Repeater::make('variants')
                    ->schema([
                        TextInput::make('color')->label('Color')->required(),
                        TextInput::make('storage')->label('Storage')->required(),
                        TextInput::make('stock')
                            ->label('Stock')
                            ->numeric()
                            ->required(),
                    ])
                    ->label('Variants')
                    ->required(),

                TextInput::make('tokopedia_link')
                    ->label('Tokopedia Link')
                    ->url()
                    ->placeholder('https://www.tokopedia.com/your-product')
                    ->default('https://www.tokopedia.com')
                    ->maxLength(255),

                TextInput::make('shopee_link')
                    ->label('Shopee Link')
                    ->url()
                    ->placeholder('https://shopee.co.id/your-product')
                    ->maxLength(255),

                TextInput::make('wa_link')
                    ->label('WhatsApp Link')
                    ->default('https://wa.me/085749266800')
                    ->disabled(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Product Name')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('sku')
                    ->label('SKU')
                    ->sortable(),

                TextColumn::make('price')
                    ->label('Price')
                    ->money('IDR', true)
                    ->sortable(),

                ImageColumn::make('image')
                    ->label('Image')
                    ->disk('public')
                    ->url(fn($record) => $record->image ? asset('storage/' . $record->image) : null)
                    ->square()
                    ->visibility('public'),

                TextColumn::make('category_id')
                    ->label('Category')
                    ->sortable()
                    ->searchable(),

                // BadgeColumn::make('status')
                //     ->label('Status')
                //     ->enum([
                //         'available' => 'Available',
                //         'out_of_stock' => 'Out of Stock',
                //         'discontinued' => 'Discontinued',
                //     ])
                //     ->colors([
                //         'success' => 'available',
                //         'danger' => 'out_of_stock',
                //         'warning' => 'discontinued',
                //     ]),
            ])
            ->filters([])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
