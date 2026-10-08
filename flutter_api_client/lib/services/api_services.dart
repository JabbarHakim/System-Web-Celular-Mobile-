import 'dart:convert';
import 'package:http/http.dart' as http;  
import '../models/Product.dart';

class ApiService {
  final String baseUrl = 'http://erha-backend.duckdns.org'; // Replace with your Laravel API base URL

  Future<List<Product>> getProducts() async {
    try{
      final response = await http.get(Uri.parse('$baseUrl/api/products',
        ),
      );

      if (response.statusCode == 200) {
        final Map<String, dynamic> jsonData = json.decode(response.body);
        final List<dynamic> products = jsonData['data'];
        
        return products.map((item) => Product.fromJson(item)).toList();
      
      } else {
        throw Exception('Failed to load products');
      }
    } catch (error) {
      throw Exception('Failed to load products: $error');
    }
  }

}