<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MemberResource\Pages;
use App\Filament\Resources\MemberResource\RelationManagers;
use App\Models\Member;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Name'),
                TextInput::make('designation')
                    ->required()
                    ->maxLength(255)
                    ->label('Designation'),
                TextInput::make('fb_url')
                    ->url()
                    ->default('https://facebook.com/')
                    ->maxLength(255)
                    ->label('Facebook URL'),
                TextInput::make('tw_url')
                    ->url()
                    ->default('https://x.com/')
                    ->maxLength(255)
                    ->label('Twitter URL'),
                TextInput::make('in_url')
                    ->url()
                    ->default('https://linkedin.com/')
                    ->maxLength(255)
                    ->label('LinkedIn URL'),
                FileUpload::make('image')
                    ->label('Profile Image')
                    ->image()
                    ->disk('public')
                    ->directory('members')
                    ->visibility('public')
                    ->columnSpanFull(),
                Toggle::make('status')
                    ->label('Active Status')
                    ->default(true)
                    ->inline(false)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Profile Image')
                    ->size(50)
                    ->circular()
                    ->default('https://cdn.pixabay.com/photo/2023/02/18/11/00/icon-7797704_640.png'),
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('designation')
                    ->label('Designation')
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }
}