var ClipboardItem: {
    new (items: Record<string, string | Number | PromiseLike<string | Blob>>, options?: ClipboardItemOptions || undefined): ClipboardItem;
    prototype: ClipboardItem;
}