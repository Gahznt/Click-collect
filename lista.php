<?php 
 //include 'verifica_login.php';
 include 'cabecalhosite.php';
 include 'conexao.php';
 include 'functions_gaiolas.php';?>
 
<h1>Extrair Relatório Click-Collect</h1>
<hr class="my-4">
<h3>Selecione o período e destino:</h3>
<div class="container">
<p>
	<form action="gerar_relatorio_completo.php" method="POST">
		<label>Data inicio:</label>
		<input type="date" name="datainicio" required>
		<label>Data fim:</label>
		<input type="date" name="datafim" required>
		<label>Loja:</label>
		<td> <select name="loja">
		<option value="">Selecione a loja</option>
		<option class="alert-danger" value="todos">Tudo</option>
		<option value="12">CE 12</option>
		<option value="20">CE 20</option>
		<option value="23">CE 23</option>
		<option value="24">CE 24</option>
		<option value="25">CE 25</option>
		<option value="29">CE 29</option>
		<option value="32">CE 32</option>
		<option value="34">CE 34</option>
		<option value="35">CE 35</option>
		<option value="37">CE 37</option>
		<option value="38">CE 38</option>
		<option value="39">CE 39</option>
		<option value="40">CE 40</option>
		<option value="41">CE 41</option>
		<option value="42">CE 42</option>
		<option value="43">CE 43</option>
		<option value="44">CE 44</option>
		<option value="45">CE 45</option>
		<option value="46">CE 46</option>
		<option value="47">CE 47</option>
		<option value="48">CE 48</option>
		<option value="50">CE 50</option>
		<option value="52">CE 52</option>
		<option value="53">CE 53</option>
		<option value="54">CE 54</option>
		<option value="55">CE 55</option>
		<option value="56">CE 56</option>
		<option value="57">CE 57</option>
		<option value="59">CE 59</option>
		<option value="60">CE 60</option>
		<option value="62">CE 62</option>
		<option value="63">CE 63</option>
		<option value="64">CE 64</option>
		<option value="66">CE 66</option>
		<option value="67">CE 67</option>
		<option value="68">CE 68</option>
		<option value="69">CE 69</option>
		<option value="70">CE 70</option>
		<option value="71">CE 71</option>
		<option value="72">CE 72</option>
		<option value="73">CE 73</option>
		<option value="75">CE 75</option>
		<option value="76">CE 76</option>
		<option value="77">CE 77</option>
		<option value="79">CE 79</option>
		<option value="80">CE 80</option>
		<option value="81">CE 81</option>
		<option value="82">CE 82</option>
		<option value="84">CE 84</option>
		<option value="85">CE 85</option>
		<option value="86">CE 86</option>
		<option value="87">CE 87</option>
		<option value="88">CE 88</option>
		<option value="89">CE 89</option>
		<option value="90">CE 90</option>
		<option value="91">CE 91</option>
		<option value="92">CE 92</option>
		<option value="94">CE 94</option>
		<option value="95">CE 95</option>
		<option value="96">CE 96</option>
		<option value="97">CE 97</option>
		<option value="98">CE 98</option>
		<option value="99">CE 99</option>
		<option value="100">CE 100</option>
		<option value="101">CE 101</option>
		<option value="102">CE 102</option>
		<option value="103">CE 103</option>
		<option value="105">CE 105</option>
		<option value="106">CE 106</option>
		<option value="107">CE 107</option>
		<option value="108">CE 108</option>
		<option value="109">CE 109</option>
		<option value="110">CE 110</option>
		<option value="111">CE 111</option>
		<option value="112">CE 112</option>
		<option value="114">CE 114</option>
		<option value="115">CE 115</option>
		<option value="116">CE 116</option>
		<option value="117">CE 117</option>
		<option value="118">CE 118</option>
		<option value="119">CE 119</option>
		<option value="120">CE 120</option>
		<option value="121">CE 121</option>
		<option value="122">CE 122</option>
		<option value="123">CE 123</option>
		<option value="124">CE 124</option>
		<option value="125">CE 125</option>
		<option value="126">CE 126</option>
		<option value="128">CE 128</option>
		<option value="129">CE 129</option>
		<option value="130">CE 130</option>
		<option value="131">CE 131</option>
		<option value="133">CE 133</option>
		<option value="135">CE 135</option>
		<option value="136">CE 136</option>
		<option value="137">CE 137</option>
		<option value="138">CE 138</option>
		<option value="139">CE 139</option>
		<option value="141">CE 141</option>
		<option value="142">CE 142</option>
		<option value="143">CE 143</option>
		<option value="144">CE 144</option>
		<option value="145">CE 145</option>
		<option value="146">CE 146</option>
		<option value="147">CE 147</option>
		<option value="149">CE 149</option>
		<option value="150">CE 150</option>
		<option value="151">CE 151</option>
		<option value="152">CE 152</option>
		<option value="153">CE 153</option>
		<option value="154">CE 154</option>
		<option value="155">CE 155</option>
		<option value="156">CE 156</option>
		<option value="157">CE 157</option>
		<option value="158">CE 158</option>
		<option value="159">CE 159</option>
		<option value="160">CE 160</option>
		<option value="161">CE 161</option>
		<option value="162">CE 162</option>
		<option value="164">CE 164</option>
		<option value="165">CE 165</option>
		<option value="166">CE 166</option>
		<option value="167">CE 167</option>
		<option value="168">CE 168</option>
		<option value="169">CE 169</option>
		<option value="170">CE 170</option>
		<option value="171">CE 171</option>
		<option value="172">CE 172</option>
		<option value="173">CE 173</option>
		<option value="174">CE 174</option>
		<option value="175">CE 175</option>
		<option value="176">CE 176</option>
		<option value="177">CE 177</option>
		<option value="178">CE 178</option>
		<option value="179">CE 179</option>
		<option value="180">CE 180</option>
		<option value="181">CE 181</option>
		<option value="182">CE 182</option>
		<option value="183">CE 183</option>
		<option value="184">CE 184</option>
		<option value="185">CE 185</option>
		<option value="186">CE 186</option>
		<option value="187">CE 187</option>
		<option value="188">CE 188</option>
		<option value="190">CE 190</option>
		<option value="191">CE 191</option>
		<option value="192">CE 192</option>
		<option value="193">CE 193</option>
		<option value="194">CE 194</option>
		<option value="195">CE 195</option>
		<option value="196">CE 196</option>
		<option value="197">CE 197</option>
		<option value="198">CE 198</option>
		<option value="199">CE 199</option>
		<option value="200">CE 200</option>
		<option value="202">CE 202</option>
		<option value="203">CE 203</option>
		<option value="204">CE 204</option>
		<option value="205">CE 205</option>
		<option value="206">CE 206</option>
		<option value="207">CE 207</option>
		<option value="208">CE 208</option>
		<option value="209">CE 209</option>
		<option value="211">CE 211</option>
		<option value="217">CE 217</option>
		<option value="218">CE 218</option>
		<option value="219">CE 219</option>
		<option value="220">CE 220</option>
		<option value="221">CE 221</option>
		<option value="222">CE 222</option>
		<option value="223">CE 223</option>
		<option value="224">CE 224</option>
		<option value="225">CE 225</option>
		<option value="226">CE 226</option>
		<option value="227">CE 227</option>
		<option value="229">CE 229</option>
		<option value="230">CE 230</option>
		<option value="234">CE 234</option>
		<option value="235">CE 235</option>
		<option value="236">CE 236</option>
		<option value="237">CE 237</option>
		<option value="238">CE 238</option>
		<option value="239">CE 239</option>
		<option value="240">CE 240</option>
		<option value="241">CE 241</option>
		<option value="242">CE 242</option>
		<option value="243">CE 243</option>
		<option value="244">CE 244</option>
		<option value="245">CE 245</option>
		<option value="247">CE 247</option>
		<option value="248">CE 248</option>
		<option value="249">CE 249</option>
		<option value="250">CE 250</option>
		<option value="251">CE 251</option>
		<option value="253">CE 253</option>
		<option value="254">CE 254</option>
		<option value="255">CE 255</option>
		<option value="256">CE 256</option>
		<option value="258">CE 258</option>
		<option value="259">CE 259</option>
		<option value="260">CE 260</option>
		<option value="262">CE 262</option>
		<option value="263">CE 263</option>
		<option value="264">CE 264</option>
		<option value="266">CE 266</option>
		<option value="267">CE 267</option>
		<option value="269">CE 269</option>
		<option value="270">CE 270</option>
		<option value="273">CE 273</option>
		<option value="274">CE 274</option>
		<option value="CT RIO">CT RIO</option>
		<option value="CT SC">CT Itajai</option>
		<option value="CT PB">CT Joao Pessoa</option>
		</select>
		<br>
		<input class="btn btn-success" type="submit" value="Extrair Relatório">
		</p>
	</form>
	<img src="click-collect.png" width="709px" height="335px" style="background-color: #F8F9FA; border-radius: 25px;">

<?php include 'rodape.php' ?>