@section('content')

<div class="contents">
	<div class="container">
		<br>
		<h1>テンプレ対応できない回答作成システム</h1>
		<br>
		<div class="row">
			<div class="d-flex align-items-end col-sm-4">
				<div class="px-sm-2">
					<div class="mb-sm-3">
				    	@include('components.cntContact')
					</div>
<!-- -->
					<div class="mb-sm-3 ml-sm-2">
						<h5>「個人情報保護に関する文言」<h5>
						<div class="form-check">
							<div class="ml-sm-3">
								<input class="form-check-input" type="checkbox" id="personalInfo" value="personalInfo" style="cursor:pointer;">
								<label for="personalInfo" class="form-check-label" id="personalInfoLabel" style="cursor:pointer;">必要ならばチェック</label>
							</div>
						</div>
					</div>
<!-- -->
					<div class="mb-sm-3 ml-sm-2">
						<h5>「ギフト券プレゼント対象判定」<h5>
						<div class="form-check">
							<div class="ml-sm-3">
								<input class="form-check-input" type="checkbox" id="footerCheck" value="footerCheck" checked="checked" style="cursor:pointer;">
								<label for="footerCheck" class="form-check-label" id="footerCheckLabel" style="cursor:pointer;">不要ならばチェックを外す</label>
								<input class="form-control copyArea" id="footerCheckHidden" type="hidden" value="※なお、ギフト券プレゼント対象判定に関しましては、全ての締め切り終了後に規約内容に沿って審査を実施させていただきます。プレゼント対象と確定した方につきましては、商品の発送をもってご連絡とかえさせていただいております。本メールは対象確定をお約束するものではございませんのでご注意ください。">
							</div>
						</div>
					</div>
					<div class="mb-sm-3 ml-sm-2">
						<h5>「〆の一行」</h5>
						<div class="ml-sm-3">
							<div class="form-check">
								<input type="radio" id="op1" name="op" class="form-check-input" value="op1" checked="checked" style="cursor:pointer;">
								<label class="form-check-label" for="op1" style="cursor:pointer;">通常パターン</label>
							</div>
							<div class="form-check">
								<input type="radio" id="op2" name="op" class="form-check-input" value="op2" style="cursor:pointer;">
								<label class="form-check-label" for="op2" style="cursor:pointer;">今後も利用してくださる</label>
							</div>
							<div class="form-check">
								<input type="radio" id="op3" name="op" class="form-check-input" value="op3" style="cursor:pointer;">
								<label class="form-check-label" for="op3" style="cursor:pointer;">今後は利用してくださらない</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="px-sm-2">
					@include('components.basicData',['items'=>$items])
				</div>
				<div class="px-sm-2">
					<form action="{{asset('/wedding_ring')}}" method="post" target="searchResult">
					@include('components.answersSearch')
					</form>
				</div>
			</div>
		</div>

		<div class="row mb-sm-3">
			<div class="col-sm-6">
				@include('components.copyText')
			</div>
			<div class="col-sm-6 text-right">
				<a href="{{asset('/wedding_ring')}}"><button type="button" class="w-50 btn btn-danger">Reset</button></a>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 pb-sm-3">
  				<textarea id="textarea" class="form-control">マイナビウエディングキャンペーン事務局です。
このたびはマイナビウエディングをご利用いただき誠にありがとうございます。
ご連絡いただいた件に関して、回答をさせていただきます。

> （お問合せ内容引用）

（返信文）

※なお、ギフト券プレゼント対象判定に関しましては、全ての締め切り終了後に規約内容に沿って審査を実施させていただきます。プレゼント対象と確定した方につきましては、商品の発送をもってご連絡とかえさせていただいております。本メールは対象確定をお約束するものではございませんのでご注意ください。


■その他、キャンペーンに関する「よくあるご質問」ページをご用意しています。ぜひご活用ください。
https://tracker.adplan7.com/wa/c/r/p?md=1293&cp=20517&agr=7931225&ad=3622453

引き続き「マイナビウエディング」をどうぞ宜しくお願い申し上げます。</textarea>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 pb-sm-3">
				<textarea readonly id="caution" class="form-control">▼フッダーその他
※なお～、の部分は内容的に必要がなさそうな場合(ギフト券の再送など)は削除してください

・やり取りは完全に終わるが今後も利用しそうな人向け 〆の一行
今後とも「マイナビウエディング」をどうぞ宜しくお願い申し上げます。

・今後は利用しなさそうな人向け(クレーマーなど)  〆の一行
「マイナビウエディング」をどうぞ宜しくお願い申し上げます。</textarea>
			</div>
		</div>
	</div>
</div>

@endsection
