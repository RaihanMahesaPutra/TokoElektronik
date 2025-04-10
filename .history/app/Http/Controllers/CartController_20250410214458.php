<?phpuse Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $productId = $request->input('product_id');
        // Simpan ke session/cart DB logic di sini
        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }
}
