<?php

namespace Domain\Book;

use App\Http\Controllers\Controller;
use Domain\Book\Request\CreateBookRequest;
use Domain\Book\Request\IndexBookRequest;
use Domain\Book\Request\UpdateBookRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class BookController extends Controller
{
    private BookRepository $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function index(IndexBookRequest $request): View
    {
        $books = $this->bookRepository->filter($request->validated(), 10);
        return view('admin.book.index', compact('books'));
    }

    public function create(): View
    {
        return view('admin.book.create');
    }

    public function store(CreateBookRequest $request): RedirectResponse
    {
        $data = $request->validated();
        Book::query()->create($data);
        return redirect()->route('admin.books.index');
    }

    public function edit(Book $book): View
    {
        return view('admin.book.edit', compact('book'));
    }

    public function update(Book $book, UpdateBookRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $book->update($data);

        return redirect()->route('admin.books.index');
    }

    public function destroy(Book $book): RedirectResponse
    {
        $book->delete();
        return redirect()->route('admin.books.index');
    }
}
